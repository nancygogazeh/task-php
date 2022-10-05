$sql = 'SELECT employeeId , emplyeeName,address,salary,phone , department.DepartmentId , department.DepartmentName from employee
JOIN department on department.DepartmentId = employee.Dept_Id';