<template>
  <div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="page-title">My Todo List</h1>
        </div>

        <div class="col-lg-12 mt-5">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="form-group">
                            <input class="form-control" name="title" type="text" placeholder="Enter Task" required>
                        </div>
                    </div>
                <div class="col-lg-4">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
                </div>
            </form>
        </div>
        <div class="col-lg-12 mt-5">
            <div>
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title </th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr v-for="task in tasks">
                        <td scope="row">{{ task.id }}</td>
                        <td>{{ task.title }}</td>
                        <td>
                          <span v-if="task.done==0" class="badge bg-warning">Not Completed</span>
                          <span v-else class="badge bg-success">Completed</span>
                        </td>
                        <td>Action</td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>
</template>

<script>
export default {
  name: 'home',
  layout: 'dashboard',
  data() {
    return {
      tasks:[],
    }
  },
  methods: {
    getTasks() {
      this.$axios.get('api/tasks').then(response=>{
        this.tasks = response.data();
      });
    },
  },
  mounted(){
    this.getTasks();
  },
}
</script>

<style>
    .page-title{
        padding-top: 5vh;
        font-size: 5rem;
        color: #037c44;
    }
</style>
