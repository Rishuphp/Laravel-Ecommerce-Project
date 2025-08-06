const CACHE_NAME = 'laravel-pwa-v1';
const OFFLINE_URL = '/offline'; // Use a static offline fallback

const ASSETS_TO_CACHE = [
  '/',
  '/offline',
  '/css/app.css',
  '/js/app.js',
  '/images/icons/product-9.jpg',

];

self.addEventListener('install', event => {
  event.waitUntil(
    caches.open(CACHE_NAME).then(cache => {
      return cache.addAll(ASSETS_TO_CACHE);
    })
  );
  self.skipWaiting(); // Activate new service worker immediately
});

self.addEventListener('activate', event => {
  event.waitUntil(
    caches.keys().then(keys => {
      return Promise.all(
        keys.filter(k => k !== CACHE_NAME).map(k => caches.delete(k))
      );
    })
  );
  self.clients.claim(); // Control all pages immediately
});

self.addEventListener('fetch', event => {
  if (event.request.method !== 'GET') return;

  event.respondWith(
    fetch(event.request)
      .then(response => {
        const cloned = response.clone();
        caches.open(CACHE_NAME).then(cache => cache.put(event.request, cloned));
        return response;
      })
      .catch(() => {
        return caches.match(event.request).then(res => {
          if (res) return res;
          // fallback to offline page for navigation requests
          if (event.request.mode === 'navigate') {
            return caches.match(OFFLINE_URL);
          }
        });
      })
  );
});
