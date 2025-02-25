<?php
// Sample photo array (replace with your data source)
$photos = [
    'photo1.jpg', 'photo2.jpg', 'photo3.jpg', 'photo4.jpg',
    'photo5.jpg', 'photo6.jpg', 'photo7.jpg', 'photo8.jpg'
];

// Photos per page
$perPage = 2;

// Calculate total pages
$totalPhotos = count($photos);
$totalPages = ceil($totalPhotos / $perPage);

// Current page from URL, clamped between 1 and totalPages
$page = isset($_GET['page']) ? max(1, min((int)$_GET['page'], $totalPages)) : 1;

// Slice photos for the current page
$start = ($page - 1) * $perPage;
$currentPhotos = array_slice($photos, $start, $perPage);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Perfect Draggable Pagination</title>
    <style>
        .photo-container {
            width: 300px;
            margin: 20px auto;
            text-align: center;
        }
        .photo {
            width: 100%;
            max-width: 300px;
            margin-bottom: 10px;
        }
        .pagination-container {
            width: 300px;
            margin: 0 auto;
            overflow: hidden;
            position: relative;
        }
        .pagination-bar {
            display: flex;
            transition: transform 0.3s ease;
            cursor: grab;
            padding: 0 10px; /* Extra padding for smoother edge behavior */
        }
        .pagination-bar.dragging {
            transition: none; /* Disable transition during drag for responsiveness */
            cursor: grabbing;
        }
        .page-dot {
            width: 20px;
            height: 20px;
            background: #ddd;
            border-radius: 50%;
            margin: 5px;
            text-align: center;
            line-height: 20px;
            font-size: 12px;
            flex-shrink: 0;
            color: #333;
        }
        .page-dot.active {
            background: #007bff;
            color: white;
        }
    </style>
</head>
<body>
    <div class="photo-container">
        <?php foreach ($currentPhotos as $photo): ?>
            <img src="<?php echo $photo; ?>" class="photo" alt="Photo">
        <?php endforeach; ?>
    </div>

    <div class="pagination-container" id="paginationContainer">
        <div class="pagination-bar" id="paginationBar">
            <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                <div class="page-dot <?php echo $page == $i ? 'active' : ''; ?>">
                    <?php echo $i; ?>
                </div>
            <?php endfor; ?>
        </div>
    </div>

    <script>
        const container = document.getElementById('paginationContainer');
        const bar = document.getElementById('paginationBar');
        let isDragging = false;
        let startX = 0;
        let translateX = 0;

        // Constants
        const dotWidth = 30; // Width (20px) + margin (5px * 2)
        const totalPages = <?php echo $totalPages; ?>;
        const currentPage = <?php echo $page; ?> - 1; // Zero-based index
        const containerWidth = container.offsetWidth;
        const barWidth = dotWidth * totalPages;

        // Center the active dot on load
        const centerOffset = (containerWidth / 2) - (currentPage * dotWidth + dotWidth / 2);
        translateX = Math.min(0, Math.max(-(barWidth - containerWidth), centerOffset));
        bar.style.transform = `translateX(${translateX}px)`;

        // Mouse events
        container.addEventListener('mousedown', (e) => {
            isDragging = true;
            startX = e.pageX - translateX;
            bar.classList.add('dragging');
        });

        container.addEventListener('mousemove', (e) => {
            if (!isDragging) return;
            e.preventDefault();
            translateX = e.pageX - startX;
            // Clamp translation within bounds
            const maxTranslate = 0;
            const minTranslate = -(barWidth - containerWidth);
            translateX = Math.max(minTranslate, Math.min(maxTranslate, translateX));
            bar.style.transform = `translateX(${translateX}px)`;
        });

        container.addEventListener('mouseup', () => {
            if (!isDragging) return;
            isDragging = false;
            bar.classList.remove('dragging');

            // Calculate the new page based on drag position
            const offsetPage = Math.round(-translateX / dotWidth);
            const newPage = Math.max(0, Math.min(totalPages - 1, offsetPage)) + 1; // 1-based page
            if (newPage !== <?php echo $page; ?>) {
                window.location.href = `?page=${newPage}`;
            } else {
                // Snap back to current page if no change
                bar.style.transform = `translateX(${translateX}px)`;
            }
        });

        container.addEventListener('mouseleave', () => {
            if (!isDragging) return;
            isDragging = false;
            bar.classList.remove('dragging');
            // Snap back to current page position
            bar.style.transform = `translateX(${centerOffset}px)`;
            translateX = centerOffset;
        });

        // Optional: Prevent text selection during drag
        container.addEventListener('selectstart', (e) => {
            if (isDragging) e.preventDefault();
        });
    </script>
</body>
</html>