const searchInput = document.getElementById('search-input');
const suggestions = document.getElementById('suggestions');

searchInput.addEventListener('input', function() {
  const searchTerm = this.value;

  if (searchTerm.length > 0) {
    // Gửi yêu cầu tìm kiếm đến máy chủ và nhận phản hồi gợi ý
    // Ví dụ: sử dụng AJAX hoặc fetch API

    // Giả sử nhận được danh sách gợi ý từ máy chủ
    const suggestionList = ['Gợi ý 1', 'Gợi ý 2', 'Gợi ý 3'];

    // Hiển thị danh sách gợi ý
    showSuggestions(suggestionList);
  } else {
    // Nếu không có ký tự nhập vào, ẩn danh sách gợi ý
    hideSuggestions();
  }
});

function showSuggestions(suggestionList) {
  suggestions.innerHTML = '';

  // Tạo các phần tử gợi ý và thêm vào danh sách
  suggestionList.forEach(function(suggestion) {
    const li = document.createElement('li');
    li.textContent = suggestion;
    suggestions.appendChild(li);
  });

  // Hiển thị danh sách gợi ý
  suggestions.style.display = 'block';
}

function hideSuggestions() {
  // Ẩn danh sách gợi ý
  suggestions.style.display = 'none';
}