<?php

class QueryDatabase extends Database
{
	private $sqlBooks =
	"SELECT books.id, books.title, authors.name, categories.name as category
	FROM books
	JOIN authors ON books.author_id = authors.id
	JOIN categories ON books.category_id = categories.id";

	public function getUsers()
	{
		$sql = "SELECT id, username FROM accounts WHERE isAdmin = 0";
		$stmnt = $this->query($sql);
		while($row = $stmnt->fetch_assoc())
		{
			echo '<tr>';
			echo '<td>' . $row['id'] . '</td>';
			echo '<td>' . $row['username'] . '</td>';
			echo '</tr>';
		}
	}

	public function getAdmins()
	{
		$sql = "SELECT id, username FROM accounts WHERE isAdmin = 1";
		$stmnt = $this->query($sql);
		while($row = $stmnt->fetch_assoc())
		{
			echo '<tr>';
			echo '<td>' . $row['id'] . '</td>';
			echo '<td>' . $row['username'] . '</td>';
			echo '</tr>';
		}

	}

	public function getBooks()
	{
		$stmnt = $this->query($this->sqlBooks);
		while($row = $stmnt->fetch_assoc())
		{
			echo '<tr>';
			echo '<td>' . $row['id'] . '</td>';
			echo '<td>' . $row['title'] . '</td>';
			echo '<td>' . $row['name'] . '</td>';
			echo '<td>' . $row['category'] . '</td>';
			echo '</tr>';
		}
	}

	public function numAdmins()
	{
		$sql = "SELECT COUNT(*) as total_admins FROM accounts WHERE isAdmin = 1";
		$stmnt = $this->query($sql);

		if ($stmnt->num_rows > 0)
		{
			echo $stmnt->fetch_assoc()['total_admins'];
		} else {
			echo "No rows";
		}
	}

	public function numUsers()
	{
		$sql = "SELECT COUNT(*) as total_users FROM accounts WHERE isAdmin = 0";
		$stmnt = $this->query($sql);

		if ($stmnt->num_rows > 0)
		{
			echo $stmnt->fetch_assoc()['total_users'];
		} else {
			echo "No rows";
		}
	}

	public function numBooks()
	{
		$sql = "SELECT COUNT(*) as total_books FROM books";
		$stmnt = $this->query($sql);

		if ($stmnt->num_rows > 0)
		{
			echo $stmnt->fetch_assoc()['total_books'];
		} else {
			echo "No rows";
		}
	}
}
