import { defineConfig } from 'vite';
import vue from '@vitejs/plugin-vue';

/*export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
	server :{
		proxy:{
			'/app':'http://localhost',
		}
	}
}); */

export default defineConfig({
     plugins: [vue()],
     server: {
       proxy: {
         '/app': 'http://localhost',
       },
     },
     build: {
       outDir: 'public/dist',
     },
   });
