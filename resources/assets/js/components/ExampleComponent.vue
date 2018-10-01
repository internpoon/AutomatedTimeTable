<template>

    <div class="form-group">
        <label>Name</label>
        <input class="form-control" name="fName" type="text" v-model="setting.name">

        <label for="email">Email address</label>
        <input class="form-control" type="text" id="email" name="email" v-model="setting.email" readonly>
        <small id="emailHelp" class="form-text text-muted">This field is cannot be modified.</small>
    </div>

</template>
<script>
    export default {
        data() {
            return {
                setting: []
            };
        },

        created() {
            this.fetchTaskList();
        },

        methods: {
            fetchTaskList() {
                axios.get('api/settings').then((res) => {
                    this.setting = res.data;
                });
            },

            // createTask() {
            //     axios.post('api/tasks', this.task)
            //         .then((res) => {
            //             this.task.body = '';
            //             this.edit = false;
            //             this.fetchTaskList();
            //         })
            //         .catch((err) => console.error(err));
            // },
            //
            // deleteTask(id) {
            //     axios.delete('api/tasks/' + id)
            //         .then((res) => {
            //             this.fetchTaskList()
            //         })
            //         .catch((err) => console.error(err));
            // },
        }
    }
</script>