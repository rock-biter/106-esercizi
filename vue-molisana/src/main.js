import { createApp } from 'vue'
// import './style.css'
import App from './App.vue'

/* import the fontawesome core */
import { library } from '@fortawesome/fontawesome-svg-core'

/* import font awesome icon component */
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

import {
	faHeart,
	faCartShopping,
	faUser,
} from '@fortawesome/free-solid-svg-icons'

import { faCircleXmark } from '@fortawesome/free-regular-svg-icons'

library.add(faHeart, faCartShopping, faUser, faCircleXmark)

createApp(App).component('font-awesome-icon', FontAwesomeIcon).mount('#app')
