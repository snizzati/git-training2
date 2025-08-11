<!DOCTYPE html>
<html>
<head>
    <title>Borang Pendaftaran Inventori</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #f4f6f8;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .form-container {
            background: #fff;
            padding: 25px 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            width: 400px;
        }
        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        label {
            font-weight: bold;
            display: block;
            margin-top: 12px;
            color: #444;
        }
        input, select {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
        }
        input:focus, select:focus {
            border-color: #28a745;
            outline: none;
            box-shadow: 0 0 5px rgba(40,167,69,0.3);
        }
        .submit-btn {
            background: #28a745;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 6px;
            width: 100%;
            margin-top: 20px;
            font-size: 16px;
            cursor: pointer;
        }
        .submit-btn:hover {
            background: #218838;
        }
        .msg {
            text-align: center;
            padding: 8px;
            background: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
            border-radius: 6px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Pendaftaran Inventori</h2>

    <!-- Papar mesej berjaya jika ada -->
    <!-- <div class="msg">Inventori berjaya didaftarkan!</div> -->

    <form method="POST" action="register_inventory.php">
        <label>Nama Barang:</label>
        <input type="text" name="item_name" placeholder="Contoh: Laptop Dell" required>

        <label>Kategori:</label>
        <select name="category" required>
            <option value="">-- Pilih Kategori --</option>
            <option value="Elektronik">Elektronik</option>
            <option value="Perabot">Perabot</option>
            <option value="Alat Tulis">Alat Tulis</option>
        </select>

        <label>Kuantiti:</label>
        <input type="number" name="quantity" placeholder="Contoh: 10" required>

        <label>Tarikh Pembelian:</label>
        <input type="date" name="purchase_date" required>

        <button type="submit" class="submit-btn">Daftar Inventori</button>
    </form>
</div>

</body>
</html>
