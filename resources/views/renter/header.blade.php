<main style="padding-top: 5px;">
            <div class="container-fluid">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      
                      
                      <li class="breadcrumb-item"><a href="{{route('renter.index')}}">My Dashboard</a></li>
                      <li class="breadcrumb-item"><a href="{{route('RenterUsers')}}" >Inbox</a></li>
                      <li class="breadcrumb-item"><a href="{{route('product.index')}}" >Postings</a></li>
                      <li class="breadcrumb-item"><a  href="{{route('contact.display')}}">Contact Us Users</a></li>
                      <li class="breadcrumb-item"><a  href="{{route('register.users')}}">Register Users</a></li>
                      <li class="breadcrumb-item"><a  href="{{route('category.index')}}">Create Category</a></li>
                      <li class="breadcrumb-item"><a  href="{{route('product.create')}}">Upload Product</a></li>

                      <li class="breadcrumb-item dropdown">
                        <a class="breadcrumb-item dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                          Account
                        </a>
                        <div class="dropdown-menu">
                          <!-- <a class="dropdown-item" href="{{route('product.create')}}">Upload Product</a> -->
                          <!-- <a class="dropdown-item" href="#">Settings</a>
                          <a class="dropdown-item" href="#">Activity</a> -->
                          <hr>
                          <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                           </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                 @csrf
                            </form>
                        </div>
                      </li>
                      <li  class="breadcrumb-item">Admin {{Auth::user()->name}} is Online</li>
                    </ol>
                </nav>
            </div>
        </main>