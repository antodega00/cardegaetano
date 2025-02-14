// resources/js/bootstrap.js
// Qui puoi configurare librerie come Axios, Lodash, ecc.
import axios from 'axios';

window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// Puoi aggiungere altre configurazioni se necessario.
