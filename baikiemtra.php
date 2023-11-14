<?php   
/* Trắc nghiệm
Câu 1. Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 [6] => 9 )
Câu 2. b
Câu 3. a
Câu 4. a
Câu 5. b
*/

// Thực hành bài 1
// hàm generateFibonacci nhận một số nguyên dương n
function generateFibonacci($n) {
    // khởi tạo mảng để lưu trữ dãy số Fibonacci
    $fibonacci = array();
    // nếu n bằng 0 hoặc âm, trả về mảng rỗng
    if ($n <= 0) {
      return $fibonacci;
    }
    // nếu n bằng 1, trả về mảng có một phần tử là 1
    if ($n == 1) {
      $fibonacci[] = 1;
      return $fibonacci;
    }
    // nếu n lớn hơn 1, bắt đầu tính toán dãy số Fibonacci
    // khởi tạo hai số đầu tiên là 1 và 1
    $a = 1;
    $b = 1;
    // thêm hai số đầu tiên vào mảng
    $fibonacci[] = $a;
    $fibonacci[] = $b;
    // lặp cho đến khi đủ n phần tử
    for ($i = 2; $i < $n; $i++) {
      // số tiếp theo bằng tổng của hai số trước đó
      $c = $a + $b;
      // thêm số tiếp theo vào mảng
      $fibonacci[] = $c;
      // cập nhật lại hai số trước đó
      $a = $b;
      $b = $c;
    }
    // trả về mảng chứa dãy số Fibonacci
    return $fibonacci;
  }
// gọi hàm generateFibonacci với n = 10
$fibonacci = generateFibonacci(10);
// hiển thị dãy số Fibonacci
echo "Dãy số Fibonacci đầu tiên có 10 phần tử là: ";
// lặp qua mảng và in ra mỗi phần tử
foreach ($fibonacci as $number) {
  echo $number . " ";
}
// kết thúc dòng
echo "\n";
?>