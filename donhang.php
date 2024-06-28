<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sách Đơn Hàng</title>
    <style>
    table {
        width: 100%;
        border-collapse: collapse;
    }

    table,
    th,
    td {
        border: 1px solid black;
    }

    th,
    td {
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }
    </style>
</head>

<body>
    <?php
    // Establish database connection
    $servername = "localhost";  // Change this to your server name
    $username = "root";         // Change this to your database username
    $password = "";             // Change this to your database password
    $dbname = "quan_ly_vat_lieu";  // Change this to your database name

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch order data
    $sql = "SELECT * FROM donhang";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Display data in a table
        echo "<table>
                <tr>
                    <th>ID</th>
                    <th>ID Vật liệu</th>
                    <th>Tên vật liệu</th>
                    <th>Số lượng</th>
                    <th>Đơn vị</th>
                    <th>Thành tiền</th>
                    <th>Tổng tiền hàng</th>
                    <th>Tên khách hàng</th>
                    <th>Số điện thoại</th>
                    <th>Địa chỉ</th>
                    <th>Ghi chú</th>
                </tr>";

        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["id"] . "</td>
                    <td>" . $row["idvl"] . "</td>
                    <td>" . $row["tenvl"] . "</td>
                    <td>" . $row["soluong"] . "</td>
                    <td>" . $row["donvi"] . "</td>
                    <td>" . number_format($row["gia"], 0, ',', '.') . " VNĐ</td>
                    <td>" . number_format($row["tongtien"], 0, ',', '.') . " VNĐ</td>
                    <td>" . $row["tenkh"] . "</td>
                    <td>" . $row["sdt"] . "</td>
                    <td>" . $row["diachi"] . "</td>
                    <td>" . $row["ghichu"] . "</td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "Không có đơn hàng nào";
    }

    $conn->close();
    ?>
</body>

</html>