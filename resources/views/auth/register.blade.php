@extends('layouts.app')

@section('content')
<div class="container">
    <nav class="navbar navbar-dark bg-dark" style="right: 194px; bottom: 27px; width: 549px;">
       <div class="container">
           <div class="justify-content-center">
               <ul class="nav nav-tabs" style="
               border-bottom-width: 0px;">
                   
                   <li class="nav-item">
                       <router-link to="/Registrar_Novel" class="nav-link">Registarte como Bachiller o Profesional</router-link>
                   </li>   
                   <li class="nav-item">
                     <router-link to="/Registrar_Empresa" class="nav-link">Registrate como empresa</router-link>
                 </li>  
                     
               </ul>
           </div>
       </div>
   </nav>

   

   
 
   <main class="py-4">
       <div class="container">
           
           <router-view></router-view>
       </div>
   </main>
 
   
 </div>
    
@endsection
