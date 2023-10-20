const routes = [
    {
        path: '/',
        name: 'Welcome',
        // Assign the Welcome component to the default-view
        components: {
          default: () => import('../components/Welcome.vue')
        },
      },
    {
        path: '/why-are-you-here',
        name: 'Why are you here?',
        component: () => import('../components/WhyAreYouHere.vue'),
    },
    {
        path: '/404',
        name: 'Get Out!',
        component: () => import('../components/GetOutOfHere.vue'),
    },
    {
        path: '/let-me-in',
        name: 'Let me in!',
        component: () => import('../components/LetMeIn.vue'),
    },
]

export default routes;