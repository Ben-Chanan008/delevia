const staticCacheName = "site-static";

const assets = ["/assets/css/errors/offline.css", "/offline"];
self.addEventListener("install", (e) => {
    e.waitUntil(
        caches.open(staticCacheName).then((cache) => {
            console.log("caching all assets");
            cache.addAll(assets);
        })
    );
});
//active

self.addEventListener("activate", (e) => {
    e.respondWith(
        caches.match(e.request).then((cacheRes) => {
            if (cacheRes) return cacheRes;

            return caches.match(assets[1]);
        })
    );
});
