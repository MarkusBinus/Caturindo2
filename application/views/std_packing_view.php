<!DOCTYPE html>
<html>
<head>
    <title>Data Standard Packing</title>
</head>
<body> 
    <h1>Data Standard Packing</h1>
    <?php if ($std_packing): ?>
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>User Code</th>
                    <th>Qty Pack</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($std_packing as $packing): ?>
                    <tr>
                        <td><?= $packing->ID; ?></td>
                        <td><?= $packing->KODE_PRODUK; ?></td>
                        <td><?= $packing->USER_CODE; ?></td>
                        <td><?= $packing->QTY_PACK; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>Tidak ada data ditemukan.</p>
    <?php endif; ?>
</body>
</html>