<template>
  <div>
    <h2>Funcionários (Vue.js)</h2>
    <ul>
      <li v-for="employee in employees" :key="employee.id">
        {{ employee.name }} - {{ employee.role }}
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  name: 'EmployeeList',
  data() {
    return {
      employees: []
    }
  },
  mounted() {
    fetch('/api/employees')
      .then(res => res.json())
      .then(data => {
        this.employees = data;
      });
  }
}
</script>
