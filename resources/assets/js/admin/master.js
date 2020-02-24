require('./general/admin');
//__ DataTable
require('./datatables/apiUsers');
require('./datatables/stockStatus');
//__ Vue.js
import VueResource from 'vue-resource';
Vue.use(VueResource);
// pages
require('./components/apiUsers');
require('./components/home');
require('./components/settings');
require('./components/stockStatus');
