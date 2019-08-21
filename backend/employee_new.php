   <table id="pro" style="padding:20px;">
   <form action="./api/api_employee.php?do=empnew" method="POST">
   <th colspan="2">新增員工資料</th>
   <tr><td>姓名</td><td><input type="text" maxlength="3" name="employee" value=""></td></tr>
   <tr><td>現任職稱</td><td><input type="text" maxlength="5" name="work" value=""></td></tr>
   <tr><td>部門代號</td><td><input type="text" maxlength="3" name="department" value=""></td></tr>
   <tr><td>縣市</td><td><input type="text" maxlength="3" name="city" value=""></td></tr>
   <tr><td> 地址</td><td><input type="text" maxlength="18"  name="addr" value=""></td></tr>
   <tr><td>電話</td><td><input type="text" maxlength="16"  name="tel" value=""></td></tr>
   <tr><td>郵遞區號</td><td><input type="text" maxlength="3"  name="zipcod" value=""></td></tr>
   <tr><td>目前月薪資</td><td><input type="text" maxlength="6"  name="monthmoney" value=""></td></tr>
   <tr><td>年假天數</td><td><input type="text" maxlength="2"  name="hoilday" value=""></td></tr>
   <tr><td colspan="2" class="button"><input type="submit" value="確認">&nbsp;<input type="reset" value="重置"></td></tr>
   </form>
   </table>
