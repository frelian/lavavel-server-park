<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setRoutes(
    unserialize(base64_decode('TzozNDoiSWxsdW1pbmF0ZVxSb3V0aW5nXFJvdXRlQ29sbGVjdGlvbiI6NDp7czo5OiIAKgByb3V0ZXMiO2E6Mzp7czo0OiJQT1NUIjthOjM6e3M6MTU6ImFwaS91c2Vycy9zdG9yZSI7TzoyNDoiSWxsdW1pbmF0ZVxSb3V0aW5nXFJvdXRlIjoxMjp7czozOiJ1cmkiO3M6MTU6ImFwaS91c2Vycy9zdG9yZSI7czo3OiJtZXRob2RzIjthOjE6e2k6MDtzOjQ6IlBPU1QiO31zOjY6ImFjdGlvbiI7YTo2OntzOjEwOiJtaWRkbGV3YXJlIjthOjE6e2k6MDtzOjM6ImFwaSI7fXM6NDoidXNlcyI7czo0MToiQXBwXEh0dHBcQ29udHJvbGxlcnNcVXNlckNvbnRyb2xsZXJAc3RvcmUiO3M6MTA6ImNvbnRyb2xsZXIiO3M6NDE6IkFwcFxIdHRwXENvbnRyb2xsZXJzXFVzZXJDb250cm9sbGVyQHN0b3JlIjtzOjk6Im5hbWVzcGFjZSI7czoyMDoiQXBwXEh0dHBcQ29udHJvbGxlcnMiO3M6NjoicHJlZml4IjtzOjM6ImFwaSI7czo1OiJ3aGVyZSI7YTowOnt9fXM6MTA6ImlzRmFsbGJhY2siO2I6MDtzOjEwOiJjb250cm9sbGVyIjtOO3M6ODoiZGVmYXVsdHMiO2E6MDp7fXM6Njoid2hlcmVzIjthOjA6e31zOjEwOiJwYXJhbWV0ZXJzIjtOO3M6MTQ6InBhcmFtZXRlck5hbWVzIjtOO3M6MjE6IgAqAG9yaWdpbmFsUGFyYW1ldGVycyI7TjtzOjE4OiJjb21wdXRlZE1pZGRsZXdhcmUiO047czo4OiJjb21waWxlZCI7QzozOToiU3ltZm9ueVxDb21wb25lbnRcUm91dGluZ1xDb21waWxlZFJvdXRlIjoyODI6e2E6ODp7czo0OiJ2YXJzIjthOjA6e31zOjExOiJwYXRoX3ByZWZpeCI7czoxNjoiL2FwaS91c2Vycy9zdG9yZSI7czoxMDoicGF0aF9yZWdleCI7czoyMzoiI14vYXBpL3VzZXJzL3N0b3JlJCNzRHUiO3M6MTE6InBhdGhfdG9rZW5zIjthOjE6e2k6MDthOjI6e2k6MDtzOjQ6InRleHQiO2k6MTtzOjE2OiIvYXBpL3VzZXJzL3N0b3JlIjt9fXM6OToicGF0aF92YXJzIjthOjA6e31zOjEwOiJob3N0X3JlZ2V4IjtOO3M6MTE6Imhvc3RfdG9rZW5zIjthOjA6e31zOjk6Imhvc3RfdmFycyI7YTowOnt9fX19czoxODoiYXBpL3ZlaGljbGVzL3N0b3JlIjtPOjI0OiJJbGx1bWluYXRlXFJvdXRpbmdcUm91dGUiOjEyOntzOjM6InVyaSI7czoxODoiYXBpL3ZlaGljbGVzL3N0b3JlIjtzOjc6Im1ldGhvZHMiO2E6MTp7aTowO3M6NDoiUE9TVCI7fXM6NjoiYWN0aW9uIjthOjc6e3M6MTA6Im1pZGRsZXdhcmUiO2E6MTp7aTowO3M6MzoiYXBpIjt9czo0OiJ1c2VzIjtzOjQ3OiJBcHBcSHR0cFxDb250cm9sbGVyc1xWZWhpY2xlQ29udHJvbGxlckBhcGlTdG9yZSI7czoxMDoiY29udHJvbGxlciI7czo0NzoiQXBwXEh0dHBcQ29udHJvbGxlcnNcVmVoaWNsZUNvbnRyb2xsZXJAYXBpU3RvcmUiO3M6OToibmFtZXNwYWNlIjtzOjIwOiJBcHBcSHR0cFxDb250cm9sbGVycyI7czo2OiJwcmVmaXgiO3M6MzoiYXBpIjtzOjU6IndoZXJlIjthOjA6e31zOjI6ImFzIjtzOjE4OiJhcGkudmVoaWNsZXMuc3RvcmUiO31zOjEwOiJpc0ZhbGxiYWNrIjtiOjA7czoxMDoiY29udHJvbGxlciI7TjtzOjg6ImRlZmF1bHRzIjthOjA6e31zOjY6IndoZXJlcyI7YTowOnt9czoxMDoicGFyYW1ldGVycyI7TjtzOjE0OiJwYXJhbWV0ZXJOYW1lcyI7TjtzOjIxOiIAKgBvcmlnaW5hbFBhcmFtZXRlcnMiO047czoxODoiY29tcHV0ZWRNaWRkbGV3YXJlIjtOO3M6ODoiY29tcGlsZWQiO0M6Mzk6IlN5bWZvbnlcQ29tcG9uZW50XFJvdXRpbmdcQ29tcGlsZWRSb3V0ZSI6MjkxOnthOjg6e3M6NDoidmFycyI7YTowOnt9czoxMToicGF0aF9wcmVmaXgiO3M6MTk6Ii9hcGkvdmVoaWNsZXMvc3RvcmUiO3M6MTA6InBhdGhfcmVnZXgiO3M6MjY6IiNeL2FwaS92ZWhpY2xlcy9zdG9yZSQjc0R1IjtzOjExOiJwYXRoX3Rva2VucyI7YToxOntpOjA7YToyOntpOjA7czo0OiJ0ZXh0IjtpOjE7czoxOToiL2FwaS92ZWhpY2xlcy9zdG9yZSI7fX1zOjk6InBhdGhfdmFycyI7YTowOnt9czoxMDoiaG9zdF9yZWdleCI7TjtzOjExOiJob3N0X3Rva2VucyI7YTowOnt9czo5OiJob3N0X3ZhcnMiO2E6MDp7fX19fXM6MTU6ImFwaS92MS92ZWhpY2xlcyI7TzoyNDoiSWxsdW1pbmF0ZVxSb3V0aW5nXFJvdXRlIjoxMjp7czozOiJ1cmkiO3M6MTU6ImFwaS92MS92ZWhpY2xlcyI7czo3OiJtZXRob2RzIjthOjE6e2k6MDtzOjQ6IlBPU1QiO31zOjY6ImFjdGlvbiI7YTo3OntzOjEwOiJtaWRkbGV3YXJlIjthOjE6e2k6MDtzOjM6ImFwaSI7fXM6NDoidXNlcyI7czo0ODoiQXBwXEh0dHBcQ29udHJvbGxlcnNcVmVoaWNsZXNBcGlDb250cm9sbGVyQHN0b3JlIjtzOjEwOiJjb250cm9sbGVyIjtzOjQ4OiJBcHBcSHR0cFxDb250cm9sbGVyc1xWZWhpY2xlc0FwaUNvbnRyb2xsZXJAc3RvcmUiO3M6OToibmFtZXNwYWNlIjtzOjIwOiJBcHBcSHR0cFxDb250cm9sbGVycyI7czo2OiJwcmVmaXgiO3M6NjoiYXBpL3YxIjtzOjU6IndoZXJlIjthOjA6e31zOjI6ImFzIjtzOjE1OiJhcGkvdjEvdmVoaWNsZXMiO31zOjEwOiJpc0ZhbGxiYWNrIjtiOjA7czoxMDoiY29udHJvbGxlciI7TjtzOjg6ImRlZmF1bHRzIjthOjA6e31zOjY6IndoZXJlcyI7YTowOnt9czoxMDoicGFyYW1ldGVycyI7TjtzOjE0OiJwYXJhbWV0ZXJOYW1lcyI7TjtzOjIxOiIAKgBvcmlnaW5hbFBhcmFtZXRlcnMiO047czoxODoiY29tcHV0ZWRNaWRkbGV3YXJlIjtOO3M6ODoiY29tcGlsZWQiO0M6Mzk6IlN5bWZvbnlcQ29tcG9uZW50XFJvdXRpbmdcQ29tcGlsZWRSb3V0ZSI6MjgyOnthOjg6e3M6NDoidmFycyI7YTowOnt9czoxMToicGF0aF9wcmVmaXgiO3M6MTY6Ii9hcGkvdjEvdmVoaWNsZXMiO3M6MTA6InBhdGhfcmVnZXgiO3M6MjM6IiNeL2FwaS92MS92ZWhpY2xlcyQjc0R1IjtzOjExOiJwYXRoX3Rva2VucyI7YToxOntpOjA7YToyOntpOjA7czo0OiJ0ZXh0IjtpOjE7czoxNjoiL2FwaS92MS92ZWhpY2xlcyI7fX1zOjk6InBhdGhfdmFycyI7YTowOnt9czoxMDoiaG9zdF9yZWdleCI7TjtzOjExOiJob3N0X3Rva2VucyI7YTowOnt9czo5OiJob3N0X3ZhcnMiO2E6MDp7fX19fX1zOjM6IkdFVCI7YTo4OntzOjk6ImFwaS91c2VycyI7TzoyNDoiSWxsdW1pbmF0ZVxSb3V0aW5nXFJvdXRlIjoxMjp7czozOiJ1cmkiO3M6OToiYXBpL3VzZXJzIjtzOjc6Im1ldGhvZHMiO2E6Mjp7aTowO3M6MzoiR0VUIjtpOjE7czo0OiJIRUFEIjt9czo2OiJhY3Rpb24iO2E6Njp7czoxMDoibWlkZGxld2FyZSI7YToyOntpOjA7czozOiJhcGkiO2k6MTtzOjQ6ImNvcnMiO31zOjQ6InVzZXMiO3M6NDQ6IkFwcFxIdHRwXENvbnRyb2xsZXJzXFVzZXJDb250cm9sbGVyQGFwaUluZGV4IjtzOjEwOiJjb250cm9sbGVyIjtzOjQ0OiJBcHBcSHR0cFxDb250cm9sbGVyc1xVc2VyQ29udHJvbGxlckBhcGlJbmRleCI7czo5OiJuYW1lc3BhY2UiO3M6MjA6IkFwcFxIdHRwXENvbnRyb2xsZXJzIjtzOjY6InByZWZpeCI7czozOiJhcGkiO3M6NToid2hlcmUiO2E6MDp7fX1zOjEwOiJpc0ZhbGxiYWNrIjtiOjA7czoxMDoiY29udHJvbGxlciI7TjtzOjg6ImRlZmF1bHRzIjthOjA6e31zOjY6IndoZXJlcyI7YTowOnt9czoxMDoicGFyYW1ldGVycyI7TjtzOjE0OiJwYXJhbWV0ZXJOYW1lcyI7TjtzOjIxOiIAKgBvcmlnaW5hbFBhcmFtZXRlcnMiO047czoxODoiY29tcHV0ZWRNaWRkbGV3YXJlIjtOO3M6ODoiY29tcGlsZWQiO0M6Mzk6IlN5bWZvbnlcQ29tcG9uZW50XFJvdXRpbmdcQ29tcGlsZWRSb3V0ZSI6MjY0OnthOjg6e3M6NDoidmFycyI7YTowOnt9czoxMToicGF0aF9wcmVmaXgiO3M6MTA6Ii9hcGkvdXNlcnMiO3M6MTA6InBhdGhfcmVnZXgiO3M6MTc6IiNeL2FwaS91c2VycyQjc0R1IjtzOjExOiJwYXRoX3Rva2VucyI7YToxOntpOjA7YToyOntpOjA7czo0OiJ0ZXh0IjtpOjE7czoxMDoiL2FwaS91c2VycyI7fX1zOjk6InBhdGhfdmFycyI7YTowOnt9czoxMDoiaG9zdF9yZWdleCI7TjtzOjExOiJob3N0X3Rva2VucyI7YTowOnt9czo5OiJob3N0X3ZhcnMiO2E6MDp7fX19fXM6MzU6ImFwaS92ZWhpY2xlcy9saXN0L3tzZWFyY2g/fS97dHlwZT99IjtPOjI0OiJJbGx1bWluYXRlXFJvdXRpbmdcUm91dGUiOjEyOntzOjM6InVyaSI7czozNToiYXBpL3ZlaGljbGVzL2xpc3Qve3NlYXJjaD99L3t0eXBlP30iO3M6NzoibWV0aG9kcyI7YToyOntpOjA7czozOiJHRVQiO2k6MTtzOjQ6IkhFQUQiO31zOjY6ImFjdGlvbiI7YTo2OntzOjEwOiJtaWRkbGV3YXJlIjthOjI6e2k6MDtzOjM6ImFwaSI7aToxO3M6NDoiY29ycyI7fXM6NDoidXNlcyI7czo0NzoiQXBwXEh0dHBcQ29udHJvbGxlcnNcVmVoaWNsZUNvbnRyb2xsZXJAYXBpSW5kZXgiO3M6MTA6ImNvbnRyb2xsZXIiO3M6NDc6IkFwcFxIdHRwXENvbnRyb2xsZXJzXFZlaGljbGVDb250cm9sbGVyQGFwaUluZGV4IjtzOjk6Im5hbWVzcGFjZSI7czoyMDoiQXBwXEh0dHBcQ29udHJvbGxlcnMiO3M6NjoicHJlZml4IjtzOjM6ImFwaSI7czo1OiJ3aGVyZSI7YTowOnt9fXM6MTA6ImlzRmFsbGJhY2siO2I6MDtzOjEwOiJjb250cm9sbGVyIjtOO3M6ODoiZGVmYXVsdHMiO2E6MDp7fXM6Njoid2hlcmVzIjthOjA6e31zOjEwOiJwYXJhbWV0ZXJzIjtOO3M6MTQ6InBhcmFtZXRlck5hbWVzIjtOO3M6MjE6IgAqAG9yaWdpbmFsUGFyYW1ldGVycyI7TjtzOjE4OiJjb21wdXRlZE1pZGRsZXdhcmUiO047czo4OiJjb21waWxlZCI7QzozOToiU3ltZm9ueVxDb21wb25lbnRcUm91dGluZ1xDb21waWxlZFJvdXRlIjo1NjI6e2E6ODp7czo0OiJ2YXJzIjthOjI6e2k6MDtzOjY6InNlYXJjaCI7aToxO3M6NDoidHlwZSI7fXM6MTE6InBhdGhfcHJlZml4IjtzOjE4OiIvYXBpL3ZlaGljbGVzL2xpc3QiO3M6MTA6InBhdGhfcmVnZXgiO3M6NzE6IiNeL2FwaS92ZWhpY2xlcy9saXN0KD86Lyg/UDxzZWFyY2g+W14vXSsrKSg/Oi8oP1A8dHlwZT5bXi9dKyspKT8pPyQjc0R1IjtzOjExOiJwYXRoX3Rva2VucyI7YTozOntpOjA7YTo1OntpOjA7czo4OiJ2YXJpYWJsZSI7aToxO3M6MToiLyI7aToyO3M6NjoiW14vXSsrIjtpOjM7czo0OiJ0eXBlIjtpOjQ7YjoxO31pOjE7YTo1OntpOjA7czo4OiJ2YXJpYWJsZSI7aToxO3M6MToiLyI7aToyO3M6NjoiW14vXSsrIjtpOjM7czo2OiJzZWFyY2giO2k6NDtiOjE7fWk6MjthOjI6e2k6MDtzOjQ6InRleHQiO2k6MTtzOjE4OiIvYXBpL3ZlaGljbGVzL2xpc3QiO319czo5OiJwYXRoX3ZhcnMiO2E6Mjp7aTowO3M6Njoic2VhcmNoIjtpOjE7czo0OiJ0eXBlIjt9czoxMDoiaG9zdF9yZWdleCI7TjtzOjExOiJob3N0X3Rva2VucyI7YTowOnt9czo5OiJob3N0X3ZhcnMiO2E6MDp7fX19fXM6MTc6ImFwaS92ZWhpY2xlcy9tYXJrIjtPOjI0OiJJbGx1bWluYXRlXFJvdXRpbmdcUm91dGUiOjEyOntzOjM6InVyaSI7czoxNzoiYXBpL3ZlaGljbGVzL21hcmsiO3M6NzoibWV0aG9kcyI7YToyOntpOjA7czozOiJHRVQiO2k6MTtzOjQ6IkhFQUQiO31zOjY6ImFjdGlvbiI7YTo2OntzOjEwOiJtaWRkbGV3YXJlIjthOjI6e2k6MDtzOjM6ImFwaSI7aToxO3M6NDoiY29ycyI7fXM6NDoidXNlcyI7czo1MjoiQXBwXEh0dHBcQ29udHJvbGxlcnNcVmVoaWNsZUNvbnRyb2xsZXJAYXBpTGlzdEJ5TWFyayI7czoxMDoiY29udHJvbGxlciI7czo1MjoiQXBwXEh0dHBcQ29udHJvbGxlcnNcVmVoaWNsZUNvbnRyb2xsZXJAYXBpTGlzdEJ5TWFyayI7czo5OiJuYW1lc3BhY2UiO3M6MjA6IkFwcFxIdHRwXENvbnRyb2xsZXJzIjtzOjY6InByZWZpeCI7czozOiJhcGkiO3M6NToid2hlcmUiO2E6MDp7fX1zOjEwOiJpc0ZhbGxiYWNrIjtiOjA7czoxMDoiY29udHJvbGxlciI7TjtzOjg6ImRlZmF1bHRzIjthOjA6e31zOjY6IndoZXJlcyI7YTowOnt9czoxMDoicGFyYW1ldGVycyI7TjtzOjE0OiJwYXJhbWV0ZXJOYW1lcyI7TjtzOjIxOiIAKgBvcmlnaW5hbFBhcmFtZXRlcnMiO047czoxODoiY29tcHV0ZWRNaWRkbGV3YXJlIjtOO3M6ODoiY29tcGlsZWQiO0M6Mzk6IlN5bWZvbnlcQ29tcG9uZW50XFJvdXRpbmdcQ29tcGlsZWRSb3V0ZSI6Mjg4OnthOjg6e3M6NDoidmFycyI7YTowOnt9czoxMToicGF0aF9wcmVmaXgiO3M6MTg6Ii9hcGkvdmVoaWNsZXMvbWFyayI7czoxMDoicGF0aF9yZWdleCI7czoyNToiI14vYXBpL3ZlaGljbGVzL21hcmskI3NEdSI7czoxMToicGF0aF90b2tlbnMiO2E6MTp7aTowO2E6Mjp7aTowO3M6NDoidGV4dCI7aToxO3M6MTg6Ii9hcGkvdmVoaWNsZXMvbWFyayI7fX1zOjk6InBhdGhfdmFycyI7YTowOnt9czoxMDoiaG9zdF9yZWdleCI7TjtzOjExOiJob3N0X3Rva2VucyI7YTowOnt9czo5OiJob3N0X3ZhcnMiO2E6MDp7fX19fXM6NToidXNlcnMiO086MjQ6IklsbHVtaW5hdGVcUm91dGluZ1xSb3V0ZSI6MTI6e3M6MzoidXJpIjtzOjU6InVzZXJzIjtzOjc6Im1ldGhvZHMiO2E6Mjp7aTowO3M6MzoiR0VUIjtpOjE7czo0OiJIRUFEIjt9czo2OiJhY3Rpb24iO2E6Nzp7czoxMDoibWlkZGxld2FyZSI7YToxOntpOjA7czozOiJ3ZWIiO31zOjQ6InVzZXMiO3M6NDE6IkFwcFxIdHRwXENvbnRyb2xsZXJzXFVzZXJDb250cm9sbGVyQGluZGV4IjtzOjEwOiJjb250cm9sbGVyIjtzOjQxOiJBcHBcSHR0cFxDb250cm9sbGVyc1xVc2VyQ29udHJvbGxlckBpbmRleCI7czo5OiJuYW1lc3BhY2UiO3M6MjA6IkFwcFxIdHRwXENvbnRyb2xsZXJzIjtzOjY6InByZWZpeCI7TjtzOjU6IndoZXJlIjthOjA6e31zOjI6ImFzIjtzOjU6InVzZXJzIjt9czoxMDoiaXNGYWxsYmFjayI7YjowO3M6MTA6ImNvbnRyb2xsZXIiO047czo4OiJkZWZhdWx0cyI7YTowOnt9czo2OiJ3aGVyZXMiO2E6MDp7fXM6MTA6InBhcmFtZXRlcnMiO047czoxNDoicGFyYW1ldGVyTmFtZXMiO047czoyMToiACoAb3JpZ2luYWxQYXJhbWV0ZXJzIjtOO3M6MTg6ImNvbXB1dGVkTWlkZGxld2FyZSI7TjtzOjg6ImNvbXBpbGVkIjtDOjM5OiJTeW1mb255XENvbXBvbmVudFxSb3V0aW5nXENvbXBpbGVkUm91dGUiOjI1MDp7YTo4OntzOjQ6InZhcnMiO2E6MDp7fXM6MTE6InBhdGhfcHJlZml4IjtzOjY6Ii91c2VycyI7czoxMDoicGF0aF9yZWdleCI7czoxMzoiI14vdXNlcnMkI3NEdSI7czoxMToicGF0aF90b2tlbnMiO2E6MTp7aTowO2E6Mjp7aTowO3M6NDoidGV4dCI7aToxO3M6NjoiL3VzZXJzIjt9fXM6OToicGF0aF92YXJzIjthOjA6e31zOjEwOiJob3N0X3JlZ2V4IjtOO3M6MTE6Imhvc3RfdG9rZW5zIjthOjA6e31zOjk6Imhvc3RfdmFycyI7YTowOnt9fX19czoxMDoidXNlcnMvbGlzdCI7TzoyNDoiSWxsdW1pbmF0ZVxSb3V0aW5nXFJvdXRlIjoxMjp7czozOiJ1cmkiO3M6MTA6InVzZXJzL2xpc3QiO3M6NzoibWV0aG9kcyI7YToyOntpOjA7czozOiJHRVQiO2k6MTtzOjQ6IkhFQUQiO31zOjY6ImFjdGlvbiI7YTo2OntzOjEwOiJtaWRkbGV3YXJlIjthOjE6e2k6MDtzOjM6IndlYiI7fXM6NDoidXNlcyI7czo0MDoiQXBwXEh0dHBcQ29udHJvbGxlcnNcVXNlckNvbnRyb2xsZXJAbGlzdCI7czoxMDoiY29udHJvbGxlciI7czo0MDoiQXBwXEh0dHBcQ29udHJvbGxlcnNcVXNlckNvbnRyb2xsZXJAbGlzdCI7czo5OiJuYW1lc3BhY2UiO3M6MjA6IkFwcFxIdHRwXENvbnRyb2xsZXJzIjtzOjY6InByZWZpeCI7TjtzOjU6IndoZXJlIjthOjA6e319czoxMDoiaXNGYWxsYmFjayI7YjowO3M6MTA6ImNvbnRyb2xsZXIiO047czo4OiJkZWZhdWx0cyI7YTowOnt9czo2OiJ3aGVyZXMiO2E6MDp7fXM6MTA6InBhcmFtZXRlcnMiO047czoxNDoicGFyYW1ldGVyTmFtZXMiO047czoyMToiACoAb3JpZ2luYWxQYXJhbWV0ZXJzIjtOO3M6MTg6ImNvbXB1dGVkTWlkZGxld2FyZSI7TjtzOjg6ImNvbXBpbGVkIjtDOjM5OiJTeW1mb255XENvbXBvbmVudFxSb3V0aW5nXENvbXBpbGVkUm91dGUiOjI2Nzp7YTo4OntzOjQ6InZhcnMiO2E6MDp7fXM6MTE6InBhdGhfcHJlZml4IjtzOjExOiIvdXNlcnMvbGlzdCI7czoxMDoicGF0aF9yZWdleCI7czoxODoiI14vdXNlcnMvbGlzdCQjc0R1IjtzOjExOiJwYXRoX3Rva2VucyI7YToxOntpOjA7YToyOntpOjA7czo0OiJ0ZXh0IjtpOjE7czoxMToiL3VzZXJzL2xpc3QiO319czo5OiJwYXRoX3ZhcnMiO2E6MDp7fXM6MTA6Imhvc3RfcmVnZXgiO047czoxMToiaG9zdF90b2tlbnMiO2E6MDp7fXM6OToiaG9zdF92YXJzIjthOjA6e319fX1zOjE6Ii8iO086MjQ6IklsbHVtaW5hdGVcUm91dGluZ1xSb3V0ZSI6MTI6e3M6MzoidXJpIjtzOjE6Ii8iO3M6NzoibWV0aG9kcyI7YToyOntpOjA7czozOiJHRVQiO2k6MTtzOjQ6IkhFQUQiO31zOjY6ImFjdGlvbiI7YTo3OntzOjEwOiJtaWRkbGV3YXJlIjthOjE6e2k6MDtzOjM6IndlYiI7fXM6NDoidXNlcyI7czo0MToiQXBwXEh0dHBcQ29udHJvbGxlcnNcVXNlckNvbnRyb2xsZXJAcmVhY3QiO3M6MTA6ImNvbnRyb2xsZXIiO3M6NDE6IkFwcFxIdHRwXENvbnRyb2xsZXJzXFVzZXJDb250cm9sbGVyQHJlYWN0IjtzOjk6Im5hbWVzcGFjZSI7czoyMDoiQXBwXEh0dHBcQ29udHJvbGxlcnMiO3M6NjoicHJlZml4IjtOO3M6NToid2hlcmUiO2E6MDp7fXM6MjoiYXMiO3M6NToicmVhY3QiO31zOjEwOiJpc0ZhbGxiYWNrIjtiOjA7czoxMDoiY29udHJvbGxlciI7TjtzOjg6ImRlZmF1bHRzIjthOjA6e31zOjY6IndoZXJlcyI7YTowOnt9czoxMDoicGFyYW1ldGVycyI7TjtzOjE0OiJwYXJhbWV0ZXJOYW1lcyI7TjtzOjIxOiIAKgBvcmlnaW5hbFBhcmFtZXRlcnMiO047czoxODoiY29tcHV0ZWRNaWRkbGV3YXJlIjtOO3M6ODoiY29tcGlsZWQiO0M6Mzk6IlN5bWZvbnlcQ29tcG9uZW50XFJvdXRpbmdcQ29tcGlsZWRSb3V0ZSI6MjM0OnthOjg6e3M6NDoidmFycyI7YTowOnt9czoxMToicGF0aF9wcmVmaXgiO3M6MToiLyI7czoxMDoicGF0aF9yZWdleCI7czo4OiIjXi8kI3NEdSI7czoxMToicGF0aF90b2tlbnMiO2E6MTp7aTowO2E6Mjp7aTowO3M6NDoidGV4dCI7aToxO3M6MToiLyI7fX1zOjk6InBhdGhfdmFycyI7YTowOnt9czoxMDoiaG9zdF9yZWdleCI7TjtzOjExOiJob3N0X3Rva2VucyI7YTowOnt9czo5OiJob3N0X3ZhcnMiO2E6MDp7fX19fXM6ODoidmVoaWNsZXMiO086MjQ6IklsbHVtaW5hdGVcUm91dGluZ1xSb3V0ZSI6MTI6e3M6MzoidXJpIjtzOjg6InZlaGljbGVzIjtzOjc6Im1ldGhvZHMiO2E6Mjp7aTowO3M6MzoiR0VUIjtpOjE7czo0OiJIRUFEIjt9czo2OiJhY3Rpb24iO2E6Nzp7czoxMDoibWlkZGxld2FyZSI7YToxOntpOjA7czozOiJ3ZWIiO31zOjQ6InVzZXMiO3M6NDQ6IkFwcFxIdHRwXENvbnRyb2xsZXJzXFZlaGljbGVDb250cm9sbGVyQGluZGV4IjtzOjEwOiJjb250cm9sbGVyIjtzOjQ0OiJBcHBcSHR0cFxDb250cm9sbGVyc1xWZWhpY2xlQ29udHJvbGxlckBpbmRleCI7czo5OiJuYW1lc3BhY2UiO3M6MjA6IkFwcFxIdHRwXENvbnRyb2xsZXJzIjtzOjY6InByZWZpeCI7TjtzOjU6IndoZXJlIjthOjA6e31zOjI6ImFzIjtzOjg6InZlaGljbGVzIjt9czoxMDoiaXNGYWxsYmFjayI7YjowO3M6MTA6ImNvbnRyb2xsZXIiO047czo4OiJkZWZhdWx0cyI7YTowOnt9czo2OiJ3aGVyZXMiO2E6MDp7fXM6MTA6InBhcmFtZXRlcnMiO047czoxNDoicGFyYW1ldGVyTmFtZXMiO047czoyMToiACoAb3JpZ2luYWxQYXJhbWV0ZXJzIjtOO3M6MTg6ImNvbXB1dGVkTWlkZGxld2FyZSI7TjtzOjg6ImNvbXBpbGVkIjtDOjM5OiJTeW1mb255XENvbXBvbmVudFxSb3V0aW5nXENvbXBpbGVkUm91dGUiOjI1OTp7YTo4OntzOjQ6InZhcnMiO2E6MDp7fXM6MTE6InBhdGhfcHJlZml4IjtzOjk6Ii92ZWhpY2xlcyI7czoxMDoicGF0aF9yZWdleCI7czoxNjoiI14vdmVoaWNsZXMkI3NEdSI7czoxMToicGF0aF90b2tlbnMiO2E6MTp7aTowO2E6Mjp7aTowO3M6NDoidGV4dCI7aToxO3M6OToiL3ZlaGljbGVzIjt9fXM6OToicGF0aF92YXJzIjthOjA6e31zOjEwOiJob3N0X3JlZ2V4IjtOO3M6MTE6Imhvc3RfdG9rZW5zIjthOjA6e31zOjk6Imhvc3RfdmFycyI7YTowOnt9fX19czoxMzoidmVoaWNsZXMvbWFyayI7TzoyNDoiSWxsdW1pbmF0ZVxSb3V0aW5nXFJvdXRlIjoxMjp7czozOiJ1cmkiO3M6MTM6InZlaGljbGVzL21hcmsiO3M6NzoibWV0aG9kcyI7YToyOntpOjA7czozOiJHRVQiO2k6MTtzOjQ6IkhFQUQiO31zOjY6ImFjdGlvbiI7YTo3OntzOjEwOiJtaWRkbGV3YXJlIjthOjE6e2k6MDtzOjM6IndlYiI7fXM6NDoidXNlcyI7czo0MzoiQXBwXEh0dHBcQ29udHJvbGxlcnNcVmVoaWNsZUNvbnRyb2xsZXJAbWFyayI7czoxMDoiY29udHJvbGxlciI7czo0MzoiQXBwXEh0dHBcQ29udHJvbGxlcnNcVmVoaWNsZUNvbnRyb2xsZXJAbWFyayI7czo5OiJuYW1lc3BhY2UiO3M6MjA6IkFwcFxIdHRwXENvbnRyb2xsZXJzIjtzOjY6InByZWZpeCI7TjtzOjU6IndoZXJlIjthOjA6e31zOjI6ImFzIjtzOjEzOiJ2ZWhpY2xlcy5tYXJrIjt9czoxMDoiaXNGYWxsYmFjayI7YjowO3M6MTA6ImNvbnRyb2xsZXIiO047czo4OiJkZWZhdWx0cyI7YTowOnt9czo2OiJ3aGVyZXMiO2E6MDp7fXM6MTA6InBhcmFtZXRlcnMiO047czoxNDoicGFyYW1ldGVyTmFtZXMiO047czoyMToiACoAb3JpZ2luYWxQYXJhbWV0ZXJzIjtOO3M6MTg6ImNvbXB1dGVkTWlkZGxld2FyZSI7TjtzOjg6ImNvbXBpbGVkIjtDOjM5OiJTeW1mb255XENvbXBvbmVudFxSb3V0aW5nXENvbXBpbGVkUm91dGUiOjI3Njp7YTo4OntzOjQ6InZhcnMiO2E6MDp7fXM6MTE6InBhdGhfcHJlZml4IjtzOjE0OiIvdmVoaWNsZXMvbWFyayI7czoxMDoicGF0aF9yZWdleCI7czoyMToiI14vdmVoaWNsZXMvbWFyayQjc0R1IjtzOjExOiJwYXRoX3Rva2VucyI7YToxOntpOjA7YToyOntpOjA7czo0OiJ0ZXh0IjtpOjE7czoxNDoiL3ZlaGljbGVzL21hcmsiO319czo5OiJwYXRoX3ZhcnMiO2E6MDp7fXM6MTA6Imhvc3RfcmVnZXgiO047czoxMToiaG9zdF90b2tlbnMiO2E6MDp7fXM6OToiaG9zdF92YXJzIjthOjA6e319fX19czo0OiJIRUFEIjthOjg6e3M6OToiYXBpL3VzZXJzIjtyOjEwNjtzOjM1OiJhcGkvdmVoaWNsZXMvbGlzdC97c2VhcmNoP30ve3R5cGU/fSI7cjoxNDE7czoxNzoiYXBpL3ZlaGljbGVzL21hcmsiO3I6MTkyO3M6NToidXNlcnMiO3I6MjI3O3M6MTA6InVzZXJzL2xpc3QiO3I6MjYyO3M6MToiLyI7cjoyOTY7czo4OiJ2ZWhpY2xlcyI7cjozMzE7czoxMzoidmVoaWNsZXMvbWFyayI7cjozNjY7fX1zOjEyOiIAKgBhbGxSb3V0ZXMiO2E6MTE6e3M6MTk6IlBPU1RhcGkvdXNlcnMvc3RvcmUiO3I6NDtzOjEzOiJIRUFEYXBpL3VzZXJzIjtyOjEwNjtzOjIyOiJQT1NUYXBpL3ZlaGljbGVzL3N0b3JlIjtyOjM3O3M6Mzk6IkhFQURhcGkvdmVoaWNsZXMvbGlzdC97c2VhcmNoP30ve3R5cGU/fSI7cjoxNDE7czoyMToiSEVBRGFwaS92ZWhpY2xlcy9tYXJrIjtyOjE5MjtzOjE5OiJQT1NUYXBpL3YxL3ZlaGljbGVzIjtyOjcxO3M6OToiSEVBRHVzZXJzIjtyOjIyNztzOjE0OiJIRUFEdXNlcnMvbGlzdCI7cjoyNjI7czo1OiJIRUFELyI7cjoyOTY7czoxMjoiSEVBRHZlaGljbGVzIjtyOjMzMTtzOjE3OiJIRUFEdmVoaWNsZXMvbWFyayI7cjozNjY7fXM6MTE6IgAqAG5hbWVMaXN0IjthOjY6e3M6MTg6ImFwaS52ZWhpY2xlcy5zdG9yZSI7cjozNztzOjE1OiJhcGkvdjEvdmVoaWNsZXMiO3I6NzE7czo1OiJ1c2VycyI7cjoyMjc7czo1OiJyZWFjdCI7cjoyOTY7czo4OiJ2ZWhpY2xlcyI7cjozMzE7czoxMzoidmVoaWNsZXMubWFyayI7cjozNjY7fXM6MTM6IgAqAGFjdGlvbkxpc3QiO2E6MTE6e3M6NDE6IkFwcFxIdHRwXENvbnRyb2xsZXJzXFVzZXJDb250cm9sbGVyQHN0b3JlIjtyOjQ7czo0NDoiQXBwXEh0dHBcQ29udHJvbGxlcnNcVXNlckNvbnRyb2xsZXJAYXBpSW5kZXgiO3I6MTA2O3M6NDc6IkFwcFxIdHRwXENvbnRyb2xsZXJzXFZlaGljbGVDb250cm9sbGVyQGFwaVN0b3JlIjtyOjM3O3M6NDc6IkFwcFxIdHRwXENvbnRyb2xsZXJzXFZlaGljbGVDb250cm9sbGVyQGFwaUluZGV4IjtyOjE0MTtzOjUyOiJBcHBcSHR0cFxDb250cm9sbGVyc1xWZWhpY2xlQ29udHJvbGxlckBhcGlMaXN0QnlNYXJrIjtyOjE5MjtzOjQ4OiJBcHBcSHR0cFxDb250cm9sbGVyc1xWZWhpY2xlc0FwaUNvbnRyb2xsZXJAc3RvcmUiO3I6NzE7czo0MToiQXBwXEh0dHBcQ29udHJvbGxlcnNcVXNlckNvbnRyb2xsZXJAaW5kZXgiO3I6MjI3O3M6NDA6IkFwcFxIdHRwXENvbnRyb2xsZXJzXFVzZXJDb250cm9sbGVyQGxpc3QiO3I6MjYyO3M6NDE6IkFwcFxIdHRwXENvbnRyb2xsZXJzXFVzZXJDb250cm9sbGVyQHJlYWN0IjtyOjI5NjtzOjQ0OiJBcHBcSHR0cFxDb250cm9sbGVyc1xWZWhpY2xlQ29udHJvbGxlckBpbmRleCI7cjozMzE7czo0MzoiQXBwXEh0dHBcQ29udHJvbGxlcnNcVmVoaWNsZUNvbnRyb2xsZXJAbWFyayI7cjozNjY7fX0='))
);
