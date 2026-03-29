class Person {
  constructor(name, age) {
    this.name = name;
    this.age = age;
  }
}

class PersonManager {
  constructor() {
    this.people = [];
    this.tableBody = document.querySelector('#dataTable tbody');
  }

  addPerson(person) {
    this.people.push(person);
    this.displayPeople();
  }

  displayPeople() {
    this.tableBody.innerHTML = ''; // clear table
    this.people.forEach(p => {
      const row = `<tr><td>${p.name}</td><td>${p.age}</td></tr>`;
      this.tableBody.insertAdjacentHTML('beforeend', row);
    });
  }
}

// Main app logic
const manager = new PersonManager();

document.querySelector('#dataForm').addEventListener('submit', function(e) {
  e.preventDefault();
  const name = document.querySelector('#name').value.trim();
  const age = document.querySelector('#age').value.trim();

  if (name && age) {
    const person = new Person(name, age);
    manager.addPerson(person);

    // clear form
    this.reset();
  }
});
