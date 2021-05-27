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
            <li><a href="product_newarrivals_list.php">&emsp;New Arrivals&emsp;&emsp;</a></li>
            <li><a href="product_Home_list.php">&emsp;Home&emsp;&emsp;</a></li>
            <li><a href="product_Electronics_list.php">&emsp;Electronics&emsp;&emsp;</a></li>
            <li><a href="product_Fitness_list.php">&emsp;Fitness&emsp;&emsp;</a></li>
            <li><a href="product_Sales_list.php">&emsp;Sale&emsp;&emsp;</a></li>
         </ul>
      </nav>
      </div>
      `);
   }
   </script>

   <script>
   const makeNav2 = (classes='') => {
      const links = ['WISHLIST','BAG'];
      document.write(`
      <div>
      <nav class="${classes}">
         <ul>
            <li><a href="customer_signin.php">Sign In</a></li>
            <li><a href="customer_bag.php">Bag</a></li>
         </ul>
      </nav>
      </div>
      `);
   }
   </script>

   <header class="navbar">
      <div class="container display-flex flex-align-center">
         <div style="margin: 0 auto">
            
            <a href="index.php"><h2>N a ë l</h2></a>
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