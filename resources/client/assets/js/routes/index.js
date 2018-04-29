import Vue from 'vue'
import VueRouter from 'vue-router'

import ChangePassword from '../components/ChangePassword.vue'
import RolesIndex from '../components/cruds/Roles/Index.vue'
import RolesCreate from '../components/cruds/Roles/Create.vue'
import RolesShow from '../components/cruds/Roles/Show.vue'
import RolesEdit from '../components/cruds/Roles/Edit.vue'
import UsersIndex from '../components/cruds/Users/Index.vue'
import UsersCreate from '../components/cruds/Users/Create.vue'
import UsersShow from '../components/cruds/Users/Show.vue'
import UsersEdit from '../components/cruds/Users/Edit.vue'
import CompaniesIndex from '../components/cruds/Companies/Index.vue'
import CompaniesCreate from '../components/cruds/Companies/Create.vue'
import CompaniesShow from '../components/cruds/Companies/Show.vue'
import CompaniesEdit from '../components/cruds/Companies/Edit.vue'
import EmployeesIndex from '../components/cruds/Employees/Index.vue'
import EmployeesCreate from '../components/cruds/Employees/Create.vue'
import EmployeesShow from '../components/cruds/Employees/Show.vue'
import EmployeesEdit from '../components/cruds/Employees/Edit.vue'

Vue.use(VueRouter)

const routes = [
    { path: '/change-password', component: ChangePassword, name: 'auth.change_password' },
    { path: '/roles', component: RolesIndex, name: 'roles.index' },
    { path: '/roles/create', component: RolesCreate, name: 'roles.create' },
    { path: '/roles/:id', component: RolesShow, name: 'roles.show' },
    { path: '/roles/:id/edit', component: RolesEdit, name: 'roles.edit' },
    { path: '/users', component: UsersIndex, name: 'users.index' },
    { path: '/users/create', component: UsersCreate, name: 'users.create' },
    { path: '/users/:id', component: UsersShow, name: 'users.show' },
    { path: '/users/:id/edit', component: UsersEdit, name: 'users.edit' },
    { path: '/companies', component: CompaniesIndex, name: 'companies.index' },
    { path: '/companies/create', component: CompaniesCreate, name: 'companies.create' },
    { path: '/companies/:id', component: CompaniesShow, name: 'companies.show' },
    { path: '/companies/:id/edit', component: CompaniesEdit, name: 'companies.edit' },
    { path: '/employees', component: EmployeesIndex, name: 'employees.index' },
    { path: '/employees/create', component: EmployeesCreate, name: 'employees.create' },
    { path: '/employees/:id', component: EmployeesShow, name: 'employees.show' },
    { path: '/employees/:id/edit', component: EmployeesEdit, name: 'employees.edit' },
]

export default new VueRouter({
    mode: 'history',
    base: '/admin',
    routes
})
