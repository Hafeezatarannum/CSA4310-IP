document.getElementById('bookForm').addEventListener('submit', function(e) {
  e.preventDefault();

  const title = document.getElementById('title').value.trim();
  const author = document.getElementById('author').value.trim();
  const isbn = document.getElementById('isbn').value.trim();
  const category = document.getElementById('category').value.trim();

  if (title && author && isbn && category) {
    const table = document.getElementById('booksTable').getElementsByTagName('tbody')[0];
    const row = table.insertRow();

    row.innerHTML = `
      <td>${title}</td>
      <td>${author}</td>
      <td>${isbn}</td>
      <td>${category}</td>
      <td><button class="delete-btn">Delete</button></td>
    `;

    // Clear form
    document.getElementById('bookForm').reset();

    // Delete button functionality
    row.querySelector('.delete-btn').addEventListener('click', function() {
      table.deleteRow(row.rowIndex - 1);
    });
  }
});
