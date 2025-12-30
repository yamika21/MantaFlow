<?php
require_once 'db_connect.php';
try {
    $stmt = $pdo->query("SELECT * FROM event_registrations ORDER BY registered_at DESC LIMIT 50");
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $phone = $row['phone'] ?: '-';
        $date = date('M j, Y g:i A', strtotime($row['registered_at']));
        ?>
        <tr class="table-row transition">
          <td class="px-6 py-4 whitespace-nowrap"><?php echo htmlspecialchars($row['name']); ?></td>
          <td class="px-6 py-4"><?php echo htmlspecialchars($row['email']); ?></td>
          <td class="px-6 py-4 font-medium text-[#015b8a]"><?php echo htmlspecialchars($row['event_name']); ?></td>
          <td class="px-6 py-4"><?php echo htmlspecialchars($phone); ?></td>
          <td class="px-6 py-4 text-sm text-gray-600"><?php echo $date; ?></td>
          <td class="px-6 py-4">
            <button onclick="deleteReg(<?php echo $row['id']; ?>)" class="text-red-600 hover:text-red-800 font-bold text-sm">
              Delete
            </button>
          </td>
        </tr>
        <?php
    }
} catch (Exception $e) {
    echo "<tr><td colspan='6' class='text-center py-8 text-red-500'>Error loading data</td></tr>";
}
?>