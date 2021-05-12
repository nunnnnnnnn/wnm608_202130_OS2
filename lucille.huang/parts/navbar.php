<!-- <header class="navbar">
   <div class="container display-flex flex-align-center" style="margin-top: 0">
      <div class="flex-none">
         <div class="brand">Naël</div>
      </div>
      <div class="flex-stretch"></div>
      <nav class="flex-none nav flex">
         <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="product_list.php">Products</a></li>
            <li><a href="cart.php">Cart</a></li>
         </ul>
      </nav>
   </div>
</header> -->



   <script>
   const makeNav = (classes='') => {
      const links = ['New Arrivals','Home','Electronics','Fitness', 'Sale'];
      document.write(`
      <div>
      <nav class="${classes}">
         <ul>
            <li><a href="product_newarrivals_list.php">New Arrivals</a></li>
            <li><a href="product_Home_list.php">Home</a></li>
            <li><a href="product_Electonics_list.php">Electronics</a></li>
            <li><a href="product_Fitness_list.php">Fitness</a></li>
            <li><a href="product_Sales_list.php">Sale</a></li>
         </ul>
      </nav>
      </div>
      `);
   }
   </script>

   <script>
   const makeNav2 = (classes='') => {
      const links = ['SIGN IN','WISHLIST','BAG'];
      document.write(`
      <div>
      <nav class="${classes}">
         <ul>
            ${links.reduce((r,o,i,a)=>r+`<li><a href="#">${o}</a></li>`,'')}
         </ul>
      </nav>
      </div>
      `);
   }
   </script>

   <header class="navbar">
      <div class="container display-flex flex-align-center">
         <div style="margin: 0 auto">
            
            <h1>Naël</h1>
         </div>
         <div class="pullright">
            <script>makeNav2("nav flex")</script>
         </div>
            
         </div>
      </div>
   </header>
   <header class="navbar">
      <div class="container display-flex flex-align-center">
            <!-- 本來的 -->
         <div style="margin: 0 auto">
             <!-- 加了style -->
            <script>makeNav("nav flex")</script>
         </div>   
      </div>
   </header>