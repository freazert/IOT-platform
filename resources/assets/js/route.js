import VueRouter from 'vue-router';
import create from './components/Create.vue';
import post from './components/Post.vue';


let routes =[
    {
        path: '/create',
        component: create,
    },
    {
        path: '/Post',
        component: post,
    },
]
export default new VueRouter({
    routes
});