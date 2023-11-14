import { createApp } from 'vue'
import App from './App.vue'

/* import the fontawesome core */
import { library } from '@fortawesome/fontawesome-svg-core'

/* import font awesome icon component */
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

import { faStar as startSolid } from '@fortawesome/free-solid-svg-icons'
import { faStar as startRegular } from '@fortawesome/free-regular-svg-icons'

library.add(startSolid, startRegular)

createApp(App).component('font-awesome-icon', FontAwesomeIcon).mount('#app')
