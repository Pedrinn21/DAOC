

@extends('home/master')

@section('master')
<nav class="nav">
    <div class="sidebar">
        <svg width="53" height="53" viewBox="0 0 53 53" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <rect width="53" height="53" fill="url(#pattern0)"/>
            <defs>
            <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
            <use xlink:href="#image0_14_5" transform="scale(0.00195312)"/>
            </pattern>
            <image id="image0_14_5" width="512" height="512" xlink:href="data:image/png;base64,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"/>
            </defs>
 
        
        </svg>
    <br>
    <br>
    <br>

    @auth
    <a href="{{route ('view.list', ['user' => auth()->user()])}}">
        <svg width="53" height="53" viewBox="0 0 53 53" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_41_332)">
            <path d="M52.5944 26.2565C52.4477 25.79 52.1645 25.3781 51.7815 25.074C51.3985 24.7699 50.9331 24.5876 50.4454 24.5506L38.1374 23.4864C37.9878 23.4725 37.8448 23.4181 37.7237 23.3292C37.6026 23.2402 37.508 23.1199 37.4501 22.9813L32.6407 11.5221C32.4528 11.0713 32.1357 10.6863 31.7294 10.4154C31.323 10.1445 30.8455 10 30.3572 10C29.8688 10 29.3914 10.1445 28.985 10.4154C28.5786 10.6863 28.2615 11.0713 28.0736 11.5221L23.2705 22.9813C23.2125 23.1199 23.118 23.2402 22.9969 23.3292C22.8758 23.4181 22.7328 23.4725 22.5832 23.4864L10.2814 24.5506C9.79273 24.5906 9.32687 24.7744 8.94246 25.0787C8.55804 25.3829 8.27225 25.7942 8.12107 26.2606C7.96988 26.7269 7.96007 27.2276 8.09287 27.6996C8.22567 28.1715 8.49513 28.5936 8.86734 28.9127L18.2044 37.0594C18.321 37.1593 18.4076 37.2896 18.4544 37.4359C18.5012 37.5821 18.5064 37.7385 18.4694 37.8875L15.6642 50.0009C15.5486 50.4789 15.5789 50.9805 15.7512 51.4411C15.9236 51.9017 16.23 52.3 16.631 52.5847C17.0229 52.8741 17.4927 53.0393 17.9795 53.0588C18.4664 53.0784 18.9479 52.9514 19.3618 52.6944L29.941 46.2764C30.068 46.1982 30.2142 46.1568 30.3634 46.1568C30.5125 46.1568 30.6587 46.1982 30.7857 46.2764L41.365 52.6944C41.7832 52.9451 42.266 53.0671 42.7531 53.0454C43.2402 53.0237 43.7101 52.8591 44.1043 52.5721C44.4985 52.2852 44.7996 51.8886 44.97 51.4317C45.1404 50.9749 45.1726 50.478 45.0626 50.003L42.2635 37.8834C42.2266 37.7344 42.2318 37.578 42.2786 37.4317C42.3254 37.2855 42.4119 37.1552 42.5285 37.0553L51.8657 28.9086C52.2373 28.5892 52.5051 28.1663 52.635 27.6938C52.7648 27.2214 52.7507 26.7209 52.5944 26.2565ZM50.7767 27.6643L41.4396 35.811C41.0977 36.1076 40.8434 36.4918 40.704 36.9224C40.5647 37.3529 40.5455 37.8134 40.6487 38.254L43.4478 50.3694C43.4869 50.5301 43.477 50.6987 43.4194 50.8537C43.3619 51.0086 43.2593 51.1428 43.1248 51.239C42.9956 51.3348 42.8406 51.3894 42.6799 51.3956C42.5193 51.4019 42.3604 51.3596 42.2242 51.2742L31.6449 44.8562C31.259 44.6206 30.8156 44.4959 30.3634 44.4959C29.9112 44.4959 29.4678 44.6206 29.0819 44.8562L18.5026 51.2742C18.3663 51.3596 18.2075 51.4019 18.0468 51.3956C17.8862 51.3894 17.7311 51.3348 17.602 51.239C17.4675 51.1428 17.3649 51.0086 17.3073 50.8537C17.2498 50.6987 17.2399 50.5301 17.279 50.3694L20.0781 38.2498C20.1813 37.8092 20.1621 37.3488 20.0227 36.9182C19.8834 36.4877 19.629 36.1034 19.2872 35.8069L9.95011 27.6643C9.82441 27.5565 9.73394 27.4134 9.69039 27.2536C9.64685 27.0938 9.65222 26.9246 9.70581 26.7679C9.75579 26.6137 9.8499 26.4776 9.9765 26.3764C10.1031 26.2752 10.2566 26.2133 10.418 26.1985L22.726 25.1344C23.1761 25.0943 23.6067 24.9322 23.9715 24.6655C24.3363 24.3988 24.6215 24.0377 24.7963 23.621L29.6036 12.1598C29.6684 12.0128 29.7745 11.8879 29.909 11.8001C30.0436 11.7124 30.2007 11.6657 30.3613 11.6657C30.5219 11.6657 30.6791 11.7124 30.8136 11.8001C30.9481 11.8879 31.0543 12.0128 31.1191 12.1598L35.9263 23.621C36.1011 24.0377 36.3863 24.3988 36.7511 24.6655C37.1159 24.9322 37.5465 25.0943 37.9966 25.1344L50.3046 26.1985C50.466 26.2133 50.6195 26.2752 50.7461 26.3764C50.8727 26.4776 50.9669 26.6137 51.0168 26.7679C51.0709 26.9242 51.0769 27.0931 51.0341 27.2529C50.9913 27.4127 50.9017 27.556 50.7767 27.6643Z" fill="black"/>
            </g>
            <defs>
            <clipPath id="clip0_41_332">
            <rect width="53" height="53" fill="white"/>
            </clipPath>
            </defs>
        </svg>
    </a>
    @endauth





    <a href="{{ route('home') }}">&nbsp;
        <svg width="53" height="53" viewBox="0 0 53 53" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M24.38 38.16C16.748 38.16 10.6 32.012 10.6 24.38C10.6 16.748 16.748 10.6 24.38 10.6C32.012 10.6 38.16 16.748 38.16 24.38C38.16 32.012 32.012 38.16 24.38 38.16ZM24.38 12.72C17.914 12.72 12.72 17.914 12.72 24.38C12.72 30.846 17.914 36.04 24.38 36.04C30.846 36.04 36.04 30.846 36.04 24.38C36.04 17.914 30.846 12.72 24.38 12.72Z" fill="black"/>
            <path d="M34.6429 33.143L44.1617 42.6618L42.6629 44.1606L33.1441 34.6418L34.6429 33.143Z" fill="black"/>
        </svg>


    </a>
    @auth
    <a href="/logout" onclick="event.preventDefault(); this.closest('form').submit();"> &nbsp;&nbsp;&nbsp;       
        <svg width="33" height="38" viewBox="0 0 33 38" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M23.0833 1H1V31.9167C1 33.088 1.46533 34.2114 2.29361 35.0397C3.1219 35.868 4.24529 36.3333 5.41667 36.3333H23.0833M25.2917 25.2917L31.9167 18.6667M31.9167 18.6667L25.2917 12.0417M31.9167 18.6667H9.83333" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </a>
    @endauth
    </div>
</nav>

@if($lixo)

    
    <p>
    
        <div>
            <h1 class ="align-center">{{$lixo->nome}}</h1>
            <h2>{{$lixo->carac}}</h2>
            <br>
            <br> 
            <h3>Informações do Lixo</h3>
            <p>{{$lixo->infolixo}}</p>   
            <br>    
            <h3>Precauções ao descartar</h3>
            <p>{{$lixo->descarte}}</p>
            <br>
        
    </p>

    <div>
        @auth
            <a href="{{route ('create.list', ['user' => auth()->user(), 'lixo' => $lixo])}}">Favorite</a>
        @endauth
        <br>
        <br>
        <h3>
        @if(session()->has('message'))
            {{session()->get('message')}}
        @endif
        </h3>
    </div>
    <br>
        </div>
    

    
@endif