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
/* Thực hành bài 2 */
// tạo một mảng kết hợp có khóa là các chuỗi
$student = array(
  "id" => "I001",
  "name" => "Nguyễn Thanh Quang",
  "age" => 20,
  "grade" => 8.5
);
// truy cập vào giá trị của mảng bằng cách dùng khóa
echo "Mã số học sinh: " . $student["id"] . "\n";
echo "Tên học sinh: " . $student["name"] . "\n";
echo "Tuổi học sinh: " . $student["age"] . "\n";
echo "Điểm học sinh: " . $student["grade"] . "\n";
// tạo một mảng kết hợp chứa thông tin về học sinh
$students = array(
  array(
    "id" => "I001",
    "name" => "Nguyễn Thanh Quang",
    "age" => 20,
    "grade" => 10,
  ),
  array(
    "id" => "I002",
    "name" => "Đoàn Quang Thắng",
    "age" => 19,
    "grade" => 9.0
  ),
  array(
    "id" => "I003",
    "name" => "Hoàng Văn Thắng",
    "age" => 17,
    "grade" => 7.5
  ),
  array(
    "id" => "I004",
    "name" => "Thân Quang Trung",
    "age" => 18,
    "grade" => 8.0
  ),
  array(
    "id" => "I005",
    "name" => "Lê Quyết Chiến",
    "age" => 20,
    "grade" => 9.5
  )
);
// hiển thị thông tin của tất cả học sinh trong mảng
echo "Thông tin của tất cả học sinh trong mảng:\n";
// lặp qua mảng và in ra thông tin của mỗi học sinh
foreach ($students as $student) {
echo "Mã số học sinh: " . $student["id"] . "\n";
echo "Tên học sinh: " . $student["name"] . "\n";
echo "Tuổi học sinh: " . $student["age"] . "\n";
echo "Điểm học sinh: " . $student["grade"] . "\n";
echo "------\n";
}
// hàm để tìm học sinh có điểm cao nhất
function findHighestGrade($students) {
  // khởi tạo biến để lưu trữ điểm cao nhất và học sinh có điểm cao nhất
  $highest_grade = 0;
  $highest_student = null;
  // lặp qua mảng và so sánh điểm của mỗi học sinh với điểm cao nhất
  foreach ($students as $student) {
    // nếu điểm của học sinh lớn hơn điểm cao nhất
    if ($student["grade"] > $highest_grade) {
      // cập nhật lại điểm cao nhất và học sinh có điểm cao nhất
      $highest_grade = $student["grade"];
      $highest_student = $student;
    }
  }
  // trả về học sinh có điểm cao nhất
  return $highest_student;
}
// gọi hàm để tìm học sinh có điểm cao nhất
$highest_student = findHighestGrade($students);
// hiển thị học sinh có điểm cao nhất
echo "Học sinh có điểm cao nhất là:\n";
echo "Mã số học sinh: " . $highest_student["id"] . "\n";
echo "Tên học sinh: " . $highest_student["name"] . "\n";
echo "Tuổi học sinh: " . $highest_student["age"] . "\n";
echo "Điểm học sinh: " . $highest_student["grade"] . "\n";
?>