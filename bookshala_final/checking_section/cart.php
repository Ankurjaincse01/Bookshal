<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart  </title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <link rel="stylesheet" href="assets/css/cart.css">
</head>
<body>
    <section class="container">
        <h2 class="height">Shopping Cart</h2>
        <hr>
    </section>
     
    <section class="cart-container">
        <table width="100%">
            <thead>
                <tr>
                    <td>Remove</td>
                    <td>Image</td>
                    <td>Product </td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Total</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td > <a href="#"><img class="delete" src="./assets/delete.png" alt=""></a>
                    </td>
                    <td><img src="./Devotional/d07db128746f3c121e87df5631c2a32e.jpg" alt="">
                    </td>
                    <td>
                        <h5> java book </h5>
                    </td>
                    <td>
                        <h5>Rs.90</h5>
                    </td>
                    <td><input type="number" name="" id="">
                    </td>
                    <td>
                        <h5>Rs.90</h5>
                    </td>
                </tr>
                <tr>
                    <td > <a href="#"><img class="delete" src="./assets/delete.png" alt=""></a>
                    </td>
                    <td><img src="./Devotional/d07db128746f3c121e87df5631c2a32e.jpg" alt="">
                    </td>
                    <td>
                        <h5> java book </h5>
                    </td>
                    <td>
                        <h5>Rs.90</h5>
                    </td>
                    <td><input type="number" name="" id="">
                    </td>
                    <td>
                        <h5>Rs.90</h5>
                    </td>
                </tr>
                <tr>
                    <td > <a href="#"><img class="delete" src="./assets/delete.png" alt=""></a>
                    </td>
                    <td><img src="./Devotional/d07db128746f3c121e87df5631c2a32e.jpg" alt="">
                    </td>
                    <td>
                        <h5> java book </h5>
                    </td>
                    <td>
                        <h5>Rs.90</h5>
                    </td>
                    <td><input type="number" name="" id="">
                    </td>
                    <td>
                        <h5>Rs.90</h5>
                    </td>
                </tr>
            </tbody>
        </table>
    </section>
    <section  class="Second-container">
 <div class="row">
    <div class="total col-lg-6 col-md-6 col-12">
        <div>
            <h5>
                CART TOTAL 
            </h5>
            <div class="d-flex" >
                <h6>Subtotal</h6>
                <p>Rs.90</p>
            </div>
            <div class="d-flex" >
                <h6>Shipping </h6>
                <p>Rs.50</p>
            </div>
            <hr class="second-hr">
            <div class="d-flex">
                <h6>Total </h6>
                <p>Rs.150</p>
            </div>
            <button> Proceed to checkout </button>
        </div>
    </div>
 </div>
    </section >


    <!-- <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-col text-center w-full mb-20">
             <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-gray-900">Shopping cart </h1>
             <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Banh mi cornhole echo park skateboard authentic crucifix neutra tilde lyft biodiesel artisan direct trade mumblecore 3 wolf moon twee</p> -->
          <!-- </div>
          <div class="lg:w-2/3 w-full mx-auto overflow-auto">
            <table class="table-auto w-full text-left whitespace-no-wrap">
              <thead>
                <tr>
                  <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl"></th>
                  <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Speed</th>
                  <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Storage</th>
                  <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Price</th>
                  <th class="w-10 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tr rounded-br"></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="px-4 py-3">Start</td>
                  <td class="px-4 py-3">5 Mb/s</td>
                  <td class="px-4 py-3">15 GB</td>
                  <td class="px-4 py-3 text-lg text-gray-900">Free</td>
                  <td class="w-10 text-center">
                    <input name="plan" type="radio">
                  </td>
                </tr>
                <tr>
                  <td class="border-t-2 border-gray-200 px-4 py-3">Pro</td>
                  <td class="border-t-2 border-gray-200 px-4 py-3">25 Mb/s</td>
                  <td class="border-t-2 border-gray-200 px-4 py-3">25 GB</td>
                  <td class="border-t-2 border-gray-200 px-4 py-3 text-lg text-gray-900">$24</td>
                  <td class="border-t-2 border-gray-200 w-10 text-center">
                    <input name="plan" type="radio">
                  </td>
                </tr>
                <tr>
                  <td class="border-t-2 border-gray-200 px-4 py-3">Business</td>
                  <td class="border-t-2 border-gray-200 px-4 py-3">36 Mb/s</td>
                  <td class="border-t-2 border-gray-200 px-4 py-3">40 GB</td>
                  <td class="border-t-2 border-gray-200 px-4 py-3 text-lg text-gray-900">$50</td>
                  <td class="border-t-2 border-gray-200 w-10 text-center">
                    <input name="plan" type="radio">
                  </td>
                </tr>
                <tr>
                  <td class="border-t-2 border-b-2 border-gray-200 px-4 py-3">Exclusive</td>
                  <td class="border-t-2 border-b-2 border-gray-200 px-4 py-3">48 Mb/s</td>
                  <td class="border-t-2 border-b-2 border-gray-200 px-4 py-3">120 GB</td>
                  <td class="border-t-2 border-b-2 border-gray-200 px-4 py-3 text-lg text-gray-900">$72</td>
                  <td class="border-t-2 border-b-2 border-gray-200 w-10 text-center">
                    <input name="plan" type="radio">
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="flex pl-4 mt-4 lg:w-2/3 w-full mx-auto">
            <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Learn More
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </a>
            <button class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Button</button>
          </div>
        </div>
      </section>  --> 
</body>
</html>