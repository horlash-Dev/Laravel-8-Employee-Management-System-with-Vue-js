import Book from '../components/Book.vue';

export const routes = 
[

{	path: '/employee',
	name: 'employeeIndex',
	component: () => import('../components/employee/index.vue')

},
{	path: '/profile/:eid',
	name: 'Index',
	component: () => import('../components/home/index.vue')

},
{	path: '/add/employee',
	name: 'employeeAdd',
	component: () => import('../components/employee/Create.vue')

},
{	path: '/edit/employee/:user',
	name: 'employeeEdit',
	component: () => import('../components/employee/Edit.vue')

},
{	path: '/edit/details/:user',
	name: 'userEdit',
	component: () => import('../components/home/Edit.vue')

},


];
