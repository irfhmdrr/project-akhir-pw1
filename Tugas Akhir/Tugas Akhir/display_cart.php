<?php
// Connect to the database
$db = mysqli_connect("localhost", "irfaahmadr28", "Mancity1894", "KOPI");

// Check if the form has been submitted
if (isset($_POST['delete'])) {
    // Get the form data
    $name = $_POST['name'];

    // Delete the item from the database
    $query = "DELETE FROM `order` WHERE name = '$name'";
    mysqli_query($db, $query);
}

// Retrieve the items in the cart from the database
$query = "SELECT o.name AS item_name, o.quantity, m.name AS menu_name
          FROM `order` o
          INNER JOIN menu m ON o.name = m.id";
$result = mysqli_query($db, $query);
$items = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<style>
    table {
        border-collapse: collapse;
        justify-content: center;
        align-items: center;
    }

    table,
    th,
    td {
        border: 1px solid black;
        padding: 10px;
    }

    th {
        background-color: #f4f4f4;
        text-align: left;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
</style>

<table>
    <h3>Data Pesanan Sementara</h3>
    <tr>
        <th>Menu</th>
        <th>Quantity</th>
        <th>Action</th>
    </tr>
    <?php foreach ($items as $item) : ?>
        <tr>
            <td><?php echo htmlspecialchars($item['menu_name']); ?></td>
            <td><?php echo htmlspecialchars($item['quantity']); ?></td>
            <td>
                <form method="post" action="process_delete.php">
                    <input type="hidden" name="name" value="<?php echo htmlspecialchars($item['item_name']); ?>">
                    <input type="submit" name="delete" value="Hapus Pesanan">
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
</table>