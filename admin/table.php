<?php
require_once('../init.php');
if( !isset($_SESSION['role']) && $_SESSION['role'] != 'admin'){
    $_SESSION['admin_err'] = "You should loggedin as Admin";
    header('location: admin.php');
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
    <style>
        h1{
            text-align: center;
            text-transform: capitalize;
            color: rebeccapurple;
            font-family: 'Poppins', sans-serif;
        }
        </style>
    <title>Document</title>
</head>
<body>   
<h1>booking data</h1>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
<thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
<tr>
<th scope="col" class="p-4">
<div class="flex items-center">
<input id="checkbox-all" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
<label for="checkbox-all" class="sr-only">checkbox</label>
</div>
</th>
<th scope="col" class="px-6 py-3">
Sno.
</th>
<th scope="col" class="px-6 py-3">
user_id
</th>
<th scope="col" class="px-6 py-3">
car_id
</th>
<th scope="col" class="px-6 py-3">
name
</th>
<th scope="col" class="px-6 py-3">
email
</th>
<th scope="col" class="px-6 py-3">
    picup
    </th>
    <th scope="col" class="px-6 py-3">
        dropup
        </th>
        <th scope="col" class="px-6 py-3">
            location
            </th>
            <th scope="col" class="px-6 py-3">
                doc name
                </th>
                <th scope="col" class="px-6 py-3">
                    doc no
                    </th>
                    <th scope="col" class="px-6 py-3">
                        status
                        </th>

<th scope="col" class="px-6 py-3">
<span class="sr-only">Edit</span>
<span class="sr-only">delete</span>
</th>
</tr>
</thead>
<tbody>

<?php
$sql = "SELECT * FROM booking";
$res = mysqli_query($conn, $sql);
$i = 0;
while($rows = mysqli_fetch_assoc($res)){
    $i++;
?>

<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
<td class="w-4 p-4">
<div class="flex items-center">
<input id="checkbox-table-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
<label for="checkbox-table-1" class="sr-only">checkbox</label>
</div>
</td>
<th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
<?= $i ?>
</th>
<td class="px-6 py-4">
<!-- user id -->
<?= $rows['user_id'] ?> 
</td>
<td class="px-6 py-4">
<!-- car id -->
<?= $rows['car_id'] ?>
</td>
<td class="px-6 py-4">
<!-- name -->
<?= $rows['name'] ?>
</td>
<td class="px-6 py-4">
<!-- email -->
<?= $rows['email'] ?>
</td>
<td class="px-6 py-4">
<!-- pickup -->
<?= $rows['pickup'] ?>
    </td>
    <td class="px-6 py-4">
    <!-- dropup -->
    <?= $rows['dropup'] ?>
        </td>
        <td class="px-6 py-4">
            <!-- location -->
            <?= $rows['location'] ?>
            </td>
            <td class="px-6 py-4">
                <!-- doc nmae  -->
                <?= $rows['doc'] ?>
                </td><td class="px-6 py-4">
                    <!-- doc no -->
                    <?= $rows['docno'] ?>
                    </td>
<td class="px-6 py-4">
    <!-- status -->
    <?php if( $rows['status'] ){ echo 'Booked'; } ?>
</td>

<td class="px-6 py-4 text-right">
<a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
</td>
<td class="px-6 py-4 text-right">
    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">delete</a>
    </td>
</tr>
<?php
}
?>


<!-- <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
<td class="w-4 p-4">
<div class="flex items-center">
<input id="checkbox-table-2" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
<label for="checkbox-table-2" class="sr-only">checkbox</label>
</div>
</td>
<th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
Microsoft Surface Pro
</th>
<td class="px-6 py-4">
White
</td>
<td class="px-6 py-4">
Laptop PC
</td>
<td class="px-6 py-4">
$1999
</td>
<td class="px-6 py-4">
$1999
</td>
<td class="px-6 py-4 text-right">
<a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
<a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">delete</a>
</td>
</tr> -->
<!-- <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
<td class="w-4 p-4">
<div class="flex items-center">
<input id="checkbox-table-2" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
<label for="checkbox-table-2" class="sr-only">checkbox</label>
</div>
</td>
<th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
Microsoft Surface Pro
</th>
<td class="px-6 py-4">
White
</td>
<td class="px-6 py-4">
Laptop PC
</td>
<td class="px-6 py-4">
$1999
</td>
<td class="px-6 py-4">
$1999
</td>
<td class="px-6 py-4 text-right">
<a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
<a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">delete</a>
</td>
</tr>
<tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
<td class="w-4 p-4">
 <div class="flex items-center">
<input id="checkbox-table-3" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
<label for="checkbox-table-3" class="sr-only">checkbox</label>
</div>
</td>
<th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
Magic Mouse 2
</th>
<td class="px-6 py-4">
Black
</td>
<td class="px-6 py-4">
Accessories
</td>
<td class="px-6 py-4">
$99
</td>
<td class="px-6 py-4">
$1999
</td>
<td class="px-6 py-4 text-right">
<a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
<a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">delete</a>
</td>
</tr> -->


</tbody>
</table>
</div>

</body>
</html>