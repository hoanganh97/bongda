<h3 class="text-justify">Chào mừng bạn đến với trang thêm mới quản trị viên. Vui lòng điền đầy đủ thông tin vào các trường và ấn tạo.</h3>
<form action="" method="post" accept-charset="utf-8">
	<table>
		<tbody>
			<tr>
				<td>Tên đăng nhập: </td>
				<td><input type="text" name="username" value="<?php echo set_value('username'); ?>" autocomplete="off"></td>
			</tr>
			<tr>
				
				<td style="color: red;"><?php echo  form_error('username'); ?></td>
			</tr>
			<tr>
				<td>Mật khẩu: </td>
				<td><input type="password" name="pass" value=""></td>		
			</tr>
			<tr>
				<td style="color: red;"><?php echo  form_error('pass'); ?></td>
			</tr>
			<tr>
				<td>Nhắc lại mật khẩu: </td>
				<td><input type="password" name="re_pass" value=""></td>
			</tr>
			<tr>
				<td style="color: red;"><?php echo  form_error('re_pass'); ?></td>				
			</tr>
			<tr>
				<td>Tên người dùng: </td>
				<td>
				<input type="text" name="ten" value="<?php echo set_value('ten'); ?>" autocomplete="off">
				</td>			
			</tr>
			<tr>
				<td style="color: red;"><?php echo  form_error('ten'); ?></td>
			</tr>
			<tr>
				<td>
					
				</td>
				<td>
					
						<input type="submit" name="" value="Tạo">
					
						<input type="reset" name="" value="Hủy">
					
				</td>
			</tr>
		</tbody>
	</table>
</form>