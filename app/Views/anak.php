<!doctype html>

<head>
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="/assets/css/table.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
</head>

<body>
    <div class="header">
        <div class="title">
            <button class="add-button">
                <i class="fas fa-plus">
                </i>
            </button>
            Angular Material Table
        </div>
        <div class="search-icon">
            <i class="fas fa-search">
            </i>
        </div>
    </div>
    <div class="table-container">
        <table>
            <thead>
                <tr class="center">
                    <th>
                    </th>
                    <th>
                        NIK
                        <!-- <i class="fas fa-sort">
                        </i> -->
                    </th>
                    <th> Nama </th>
                    <th> Tanggal Lahir </th>
                    <th> Umur </th>
                    <th> Detail </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($anak as $a): ?>
                    <tr class="center">
                        <td>
                            <img alt="Profile image of AI-AI" height="40" src="https://storage.googleapis.com/a1aa/image/MfJbE1TRbVR3b6fiyNmhY1Uifj9H9OWkZV1V2kmGt5GM7mznA.jpg" style="border-radius: 50%;" width="40" />
                        </td>
                        <td><?= $a['nik']; ?></td>
                        <td><?= $a['nama_anak']; ?></td>
                        <td><?= $a['tgl_lahir']; ?></td>
                        <?php $bulan = $a['bulan'] ?>
                        <?php if ($bulan <= 12): ?>
                            <td><?= $a['bulan']; ?> Bulan</td>
                        <?php else: ?>
                            <?php $bagi = $bulan % 12 ?>
                            <?php if ($bagi > 0): ?>
                                <td><?= $a['tahun']; ?> Tahun <?= $bagi; ?> Bulan</td>
                            <?php else: ?>
                                <td><?= $a['tahun']; ?> Tahun</td>
                            <?php endif; ?>
                        <?php endif; ?>
                        <td class="more-options">
                            <i class="fas fa-ellipsis-v">
                                <a href="/detail/<?= $a['nama_anak']; ?>"></a>
                            </i>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="pagination">
            <div class="rows-per-page">
                <span>
                    Rows per page:
                </span>
                <span>
                    10, 25, 50, 100
                </span>
                <span>
                    (current is 3)
                </span>
            </div>
            <div class="page-numbers">
                <a class="active" href="#">
                    1
                </a>
                <a href="#">
                    2
                </a>
            </div>
        </div>
    </div>
</body>

</html>