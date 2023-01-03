<?php
// Connect to the database
$db = mysqli_connect("localhost", "irfaahmadr28", "Mancity1894", "KOPI");

// Check if the form has been submitted
if (isset($_POST['submit'])) {
  // Get the form data
  $name = $_POST['name'];
  $quantity = $_POST['quantity'];

  // Add the item to the database
  $query = "INSERT INTO `order` (name, quantity) VALUES ('$name', '$quantity')";
  mysqli_query($db, $query);
}

// Retrieve the menu items from the database
$query = "SELECT * FROM menu";
$result = mysqli_query($db, $query);
$items = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Order Form</title>
  <style>
    /* Add your styles here */
    label {
      display: block;
      margin-bottom: 8px;
    }

    select,
    input[type="number"] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      box-sizing: border-box;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    input[type="submit"] {
      width: 100%;
      background-color: #4caf50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>

<body>
  <!-- navbar -->
  <nav class="flex justify-between bg-gray-900 text-white w-screen">
    <div class="px-5 xl:px-12 py-6 flex w-full items-center">
      <a class="text-3xl font-bold font-heading" href="#">
        <img class="h-24" src="assets/koma.png" alt="logo">
      </a>
      <!-- Nav Links -->
      <ul class="hidden md:flex px-4 mx-auto font-semibold font-heading space-x-12">
        <li><a class="hover:text-gray-200" href="index.php">Home</a></li>
        <li><a class="hover:text-gray-200" href="menu.php">Menu</a></li>
        <li><a class="hover:text-gray-200" href="profil.php">Contact Us</a></li>
      </ul>
      <!-- Header Icons -->
      <div class="hidden xl:flex items-center space-x-5 items-center">
        <a class="flex items-center hover:text-gray-200" href="process_add.php">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
          </svg>
          <span class="flex absolute -mt-5 ml-4">
            <span class="animate-ping absolute inline-flex h-3 w-3 rounded-full bg-pink-400 opacity-75"></span>
            <span class="relative inline-flex rounded-full h-3 w-3 bg-pink-500">
            </span>
          </span>
        </a>
        <!-- Sign In / Register      -->
        <a class="flex items-center hover:text-gray-200" href="log.php">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
        </a>

      </div>
    </div>
    <!-- Responsive navbar -->
    <a class="xl:hidden flex mr-6 items-center" href="#">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
      </svg>
      <span class="flex absolute -mt-5 ml-4">
        <span class="animate-ping absolute inline-flex h-3 w-3 rounded-full bg-pink-400 opacity-75"></span>
        <span class="relative inline-flex rounded-full h-3 w-3 bg-pink-500">
        </span>
      </span>
    </a>
    <a class="navbar-burger self-center mr-12 xl:hidden" href="#">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
      </svg>
    </a>
  </nav>
  <!-- navbar end -->
  <!-- cards -->
  <div class="bg-gray-800 px-4 py-3 text-white sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8">
    <p class="text-center font-medium sm:text-left">
      Silahkan Pesan Sesuai Keinginan Anda
    </p>
  </div>

  <!-- Form for adding an item to the database -->
  <form method="post" action="process_add.php">
    <label for="name">Menu Name:</label>
    <select name="name">
      <?php foreach ($items as $item) : ?>
        <option value="<?php echo htmlspecialchars($item['id']); ?>">
          <?php echo htmlspecialchars($item['name']); ?>
        </option>
      <?php endforeach; ?>
    </select>
    <label for="quantity">Quantity:</label>
    <input type="number" name="quantity" min="1" value="1">
    <input type="submit" name="submit" value="Pesan">
  </form>
</body>

</html>

<?php include 'display_cart.php'; ?>