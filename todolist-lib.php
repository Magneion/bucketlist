<?php
// FONCTIONS COMMUNES

function getTodos() {
  $sql = "SELECT * FROM todo WHERE done = " . $conn->quote($done);
  return $conn->query($sql);
}

function getAllTodos() {
  $sql = "SELECT * FROM todo WHERE done = " . $conn->quote($done);
  return $conn->fetchAll($sql);
}

// PAS FONCTIONNELLE
function insertTodos() {
  $sql = "INSERT INTO todo (id, title, description, deadline, done) VALUES" .
  ]);
}

function deleteTodos() {
  $sql = "DELETE * FROM todo WHERE id = " . $conn->quote($id);
}
