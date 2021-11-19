export const routes = [
    {
        path:'/',
        component: () => import('./components/ExampleComponent.vue'),
    },


    //admin
    {
        path:'/web/setting/:id',
        component: () => import('./components/admin/webSetting/index.vue'),
    },


]
