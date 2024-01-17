import { createRouter, createWebHistory } from 'vue-router'

import Homepage from './pages/Homepage.vue'
import PostIndex from './pages/posts/Index.vue'
import PostShow from './pages/posts/Show.vue'
import Contact from './pages/Contact.vue'
import NotFound from './pages/404.vue'
import CategoryArchive from './pages/categories/Archive.vue'

const router = createRouter({
	history: createWebHistory(),
	routes: [
		{
			path: '/',
			name: 'home',
			component: Homepage,
		},
		{
			path: '/blog',
			name: 'posts.index',
			component: PostIndex,
		},
		{
			path: '/blog/:slug',
			name: 'posts.show',
			props: true,
			component: PostShow,
		},
		{
			path: '/category/:slug',
			name: 'categories.archive',
			props: true,
			component: CategoryArchive,
		},
		{
			path: '/contatti',
			name: 'contacts',
			component: Contact,
		},
		{
			path: '/:pathMatch(.*)*',
			name: 'not-found',
			component: NotFound,
		},
	],
})

export { router }
