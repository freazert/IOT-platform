import VueRouter from 'vue-router';
import Create from './components/Create.vue';
import Index from './components/Index.vue';


let routes =[
    
    {
        
        path: '/Create',
        component: Create,
    },
    {
        path: '/',
        component: Index,
    },
]
export default new VueRouter({
    routes
});