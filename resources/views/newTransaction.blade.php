<form action="transaction/store" method="POST">
	<table>
		<tr><th>From Account</th><td><select name="origin_cust_id">
			<option>123456789</option>
			</select></td>
		</tr>
		<tr><th>To Account</th><td><select name="beneficiary_id">
			<option>987654321</option>
			</select></td>
		</tr>
		<tr><th>Amount</th>
			<td><input type="text" name="amount" ></td>
		</tr>
		<tr><th>Mode</th><td><select name="mode_payment">
			<option>NEFT</option>
			<option>IMPS</option>
			<option>INTERNAL</option>
			</select></td>
		</tr>	
	</table>
</form>
