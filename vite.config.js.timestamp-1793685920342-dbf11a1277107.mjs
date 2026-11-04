// vite.config.js
import { defineConfig } from "file:///C:/xampp/htdocs/Menu/menu.wegeni.com/node_modules/vite/dist/node/index.js";
import laravel from "file:///C:/xampp/htdocs/Menu/menu.wegeni.com/node_modules/laravel-vite-plugin/dist/index.js";
import vue from "file:///C:/xampp/htdocs/Menu/menu.wegeni.com/node_modules/@vitejs/plugin-vue/dist/index.mjs";
var vite_config_default = defineConfig({
  plugins: [
    laravel({
      input: [
        "resources/css/app.css",
        "resources/js/app.js",
        "resources/js/app.js",
        // your normal livewire/ui stuff
        "resources/js/pos-app.js"
        // POS entry
      ],
      refresh: true
    }),
    vue()
  ]
});
export {
  vite_config_default as default
};
//# sourceMappingURL=data:application/json;base64,ewogICJ2ZXJzaW9uIjogMywKICAic291cmNlcyI6IFsidml0ZS5jb25maWcuanMiXSwKICAic291cmNlc0NvbnRlbnQiOiBbImNvbnN0IF9fdml0ZV9pbmplY3RlZF9vcmlnaW5hbF9kaXJuYW1lID0gXCJDOlxcXFx4YW1wcFxcXFxodGRvY3NcXFxcTWVudVxcXFxtZW51LndlZ2VuaS5jb21cIjtjb25zdCBfX3ZpdGVfaW5qZWN0ZWRfb3JpZ2luYWxfZmlsZW5hbWUgPSBcIkM6XFxcXHhhbXBwXFxcXGh0ZG9jc1xcXFxNZW51XFxcXG1lbnUud2VnZW5pLmNvbVxcXFx2aXRlLmNvbmZpZy5qc1wiO2NvbnN0IF9fdml0ZV9pbmplY3RlZF9vcmlnaW5hbF9pbXBvcnRfbWV0YV91cmwgPSBcImZpbGU6Ly8vQzoveGFtcHAvaHRkb2NzL01lbnUvbWVudS53ZWdlbmkuY29tL3ZpdGUuY29uZmlnLmpzXCI7aW1wb3J0IHsgZGVmaW5lQ29uZmlnIH0gZnJvbSBcInZpdGVcIjtcbmltcG9ydCBsYXJhdmVsIGZyb20gXCJsYXJhdmVsLXZpdGUtcGx1Z2luXCI7XG5pbXBvcnQgdnVlIGZyb20gXCJAdml0ZWpzL3BsdWdpbi12dWVcIjtcblxuZXhwb3J0IGRlZmF1bHQgZGVmaW5lQ29uZmlnKHtcbiAgICBwbHVnaW5zOiBbXG4gICAgICAgIGxhcmF2ZWwoe1xuICAgICAgICAgICAgaW5wdXQ6IFtcbiAgICAgICAgICAgICAgICBcInJlc291cmNlcy9jc3MvYXBwLmNzc1wiLFxuICAgICAgICAgICAgICAgIFwicmVzb3VyY2VzL2pzL2FwcC5qc1wiLFxuICAgICAgICAgICAgICAgIFwicmVzb3VyY2VzL2pzL2FwcC5qc1wiLCAvLyB5b3VyIG5vcm1hbCBsaXZld2lyZS91aSBzdHVmZlxuICAgICAgICAgICAgICAgIFwicmVzb3VyY2VzL2pzL3Bvcy1hcHAuanNcIiwgLy8gUE9TIGVudHJ5XG4gICAgICAgICAgICBdLFxuICAgICAgICAgICAgcmVmcmVzaDogdHJ1ZSxcbiAgICAgICAgfSksXG4gICAgICAgIHZ1ZSgpLFxuICAgIF0sXG59KTtcbiJdLAogICJtYXBwaW5ncyI6ICI7QUFBd1MsU0FBUyxvQkFBb0I7QUFDclUsT0FBTyxhQUFhO0FBQ3BCLE9BQU8sU0FBUztBQUVoQixJQUFPLHNCQUFRLGFBQWE7QUFBQSxFQUN4QixTQUFTO0FBQUEsSUFDTCxRQUFRO0FBQUEsTUFDSixPQUFPO0FBQUEsUUFDSDtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUE7QUFBQSxRQUNBO0FBQUE7QUFBQSxNQUNKO0FBQUEsTUFDQSxTQUFTO0FBQUEsSUFDYixDQUFDO0FBQUEsSUFDRCxJQUFJO0FBQUEsRUFDUjtBQUNKLENBQUM7IiwKICAibmFtZXMiOiBbXQp9Cg==
