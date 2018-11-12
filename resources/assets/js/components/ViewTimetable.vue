<template>
    <table>
        <small style="font-size: 100%" class="form-text text-muted" v-if="enrolledSessions.length === 0">You have not enrolled to any sessions yet !</small>
        <tr class="row_grey">
            <th style="background-color: skyblue">Monday</th>
            <th style="background-color: navajowhite">Tuesday</th>
            <th style="background-color: lightcoral">Wednesday</th>
            <th style="background-color: paleturquoise">Thursday</th>
            <th style="background-color: aquamarine">Friday</th>
        </tr>
        <tr class="data">
            <td v-for="session in monday8" v-bind:class="session.type" >
                <h5>{{session.subject_name}}</h5>
                <h5>{{session.type}} ( {{session.lecturer}} )</h5>
                <h5>{{session.start_time}} - {{session.end_time}} ( {{session.duration}} hours )</h5>
                <h5>{{session.venue}}</h5>
            </td>
            <td v-if="monday8.length === 0" class="no-bg" >&nbsp;</td>

            <td v-for="session in tuesday8" v-bind:class="session.type" >
                <h5>{{session.subject_name}}</h5>
                <h5>{{session.type}} ( {{session.lecturer}} )</h5>
                <h5>{{session.start_time}} - {{session.end_time}} ( {{session.duration}} hours )</h5>
                <h5>{{session.venue}}</h5>
            </td>
            <td v-if="tuesday8.length === 0" class="no-bg" >&nbsp;</td>

            <td v-for="session in wednesday8" v-bind:class="session.type" >
                <h5>{{session.subject_name}}</h5>
                <h5>{{session.type}} ( {{session.lecturer}} )</h5>
                <h5>{{session.start_time}} - {{session.end_time}} ( {{session.duration}} hours )</h5>
                <h5>{{session.venue}}</h5>
            </td>
            <td v-if="wednesday8.length === 0" class="no-bg" >&nbsp;</td>

            <td v-for="session in thursday8" v-bind:class="session.type" >
                <h5>{{session.subject_name}}</h5>
                <h5>{{session.type}} ( {{session.lecturer}} )</h5>
                <h5>{{session.start_time}} - {{session.end_time}} ( {{session.duration}} hours )</h5>
                <h5>{{session.venue}}</h5>
            </td>
            <td v-if="thursday8.length === 0" class="no-bg" >&nbsp;</td>

            <td v-for="session in friday8" v-bind:class="session.type" >
                <h5>{{session.subject_name}}</h5>
                <h5>{{session.type}} ( {{session.lecturer}} )</h5>
                <h5>{{session.start_time}} - {{session.end_time}} ( {{session.duration}} hours )</h5>
                <h5>{{session.venue}}</h5>
            </td>
            <td v-if="friday8.length === 0" class="no-bg" >&nbsp;</td>
        </tr>

        <tr class="data">
            <td v-for="session in monday9" v-bind:class="session.type" >
                <h5>{{session.subject_name}}</h5>
                <h5>{{session.type}} ( {{session.lecturer}} )</h5>
                <h5>{{session.start_time}} - {{session.end_time}} ( {{session.duration}} hours )</h5>
                <h5>{{session.venue}}</h5>
            </td>
            <td v-if="monday9.length === 0" class="no-bg" >&nbsp;</td>

            <td v-for="session in tuesday9" v-bind:class="session.type" >
                <h5>{{session.subject_name}}</h5>
                <h5>{{session.type}} ( {{session.lecturer}} )</h5>
                <h5>{{session.start_time}} - {{session.end_time}} ( {{session.duration}} hours )</h5>
                <h5>{{session.venue}}</h5>
            </td>
            <td v-if="tuesday9.length === 0" class="no-bg" >&nbsp;</td>

            <td v-for="session in wednesday9" v-bind:class="session.type" >
                <h5>{{session.subject_name}}</h5>
                <h5>{{session.type}} ( {{session.lecturer}} )</h5>
                <h5>{{session.start_time}} - {{session.end_time}} ( {{session.duration}} hours )</h5>
                
            </td>
            <td v-if="wednesday9.length === 0" class="no-bg" >&nbsp;</td>

            <td v-for="session in thursday9" v-bind:class="session.type" >
                <h5>{{session.subject_name}}</h5>
                <h5>{{session.type}} ( {{session.lecturer}} )</h5>
                <h5>{{session.start_time}} - {{session.end_time}} ( {{session.duration}} hours )</h5>
                <h5>{{session.venue}}</h5>
            </td>
            <td v-if="thursday9.length === 0" class="no-bg" >&nbsp;</td>

            <td v-for="session in friday9" v-bind:class="session.type" >
                <h5>{{session.subject_name}}</h5>
                <h5>{{session.type}} ( {{session.lecturer}} )</h5>
                <h5>{{session.start_time}} - {{session.end_time}} ( {{session.duration}} hours )</h5>
                <h5>{{session.venue}}</h5>
            </td>
            <td v-if="friday9.length === 0" class="no-bg" >&nbsp;</td>
        </tr>

        <tr class="data">
            <td v-for="session in monday10" v-bind:class="session.type" >
                <h5>{{session.subject_name}}</h5>
                <h5>{{session.type}} ( {{session.lecturer}} )</h5>
                <h5>{{session.start_time}} - {{session.end_time}} ( {{session.duration}} hours )</h5>
                <h5>{{session.venue}}</h5>
            </td>
            <td v-if="monday10.length === 0" class="no-bg" >&nbsp;</td>

            <td v-for="session in tuesday10" v-bind:class="session.type" >
                <h5>{{session.subject_name}}</h5>
                <h5>{{session.type}} ( {{session.lecturer}} )</h5>
                <h5>{{session.start_time}} - {{session.end_time}} ( {{session.duration}} hours )</h5>
                <h5>{{session.venue}}</h5>
            </td>
            <td v-if="tuesday10.length === 0" class="no-bg" >&nbsp;</td>

            <td v-for="session in wednesday10" v-bind:class="session.type" >
                <h5>{{session.subject_name}}</h5>
                <h5>{{session.type}} ( {{session.lecturer}} )</h5>
                <h5>{{session.start_time}} - {{session.end_time}} ( {{session.duration}} hours )</h5>
                <h5>{{session.venue}}</h5>
            </td>
            <td v-if="wednesday10.length === 0" class="no-bg" >&nbsp;</td>

            <td v-for="session in thursday10" v-bind:class="session.type" >
                <h5>{{session.subject_name}}</h5>
                <h5>{{session.type}} ( {{session.lecturer}} )</h5>
                <h5>{{session.start_time}} - {{session.end_time}} ( {{session.duration}} hours )</h5>
                <h5>{{session.venue}}</h5>
            </td>
            <td v-if="thursday10.length === 0" class="no-bg" >&nbsp;</td>

            <td v-for="session in friday10" v-bind:class="session.type" >
                <h5>{{session.subject_name}}</h5>
                <h5>{{session.type}} ( {{session.lecturer}} )</h5>
                <h5>{{session.start_time}} - {{session.end_time}} ( {{session.duration}} hours )</h5>
                <h5>{{session.venue}}</h5>
            </td>
            <td v-if="friday10.length === 0" class="no-bg" >&nbsp;</td>
        </tr>

        <tr class="data">
            <td v-for="session in monday11" v-bind:class="session.type" >
                <h5>{{session.subject_name}}</h5>
                <h5>{{session.type}} ( {{session.lecturer}} )</h5>
                <h5>{{session.start_time}} - {{session.end_time}} ( {{session.duration}} hours )</h5>
                <h5>{{session.venue}}</h5>
            </td>
            <td v-if="monday11.length === 0" class="no-bg" >&nbsp;</td>

            <td v-for="session in tuesday11" v-bind:class="session.type" >
                <h5>{{session.subject_name}}</h5>
                <h5>{{session.type}} ( {{session.lecturer}} )</h5>
                <h5>{{session.start_time}} - {{session.end_time}} ( {{session.duration}} hours )</h5>
                <h5>{{session.venue}}</h5>
            </td>
            <td v-if="tuesday11.length === 0" class="no-bg" >&nbsp;</td>

            <td v-for="session in wednesday11" v-bind:class="session.type" >
                <h5>{{session.subject_name}}</h5>
                <h5>{{session.type}} ( {{session.lecturer}} )</h5>
                <h5>{{session.start_time}} - {{session.end_time}} ( {{session.duration}} hours )</h5>
                <h5>{{session.venue}}</h5>
            </td>
            <td v-if="wednesday11.length === 0" class="no-bg" >&nbsp;</td>

            <td v-for="session in thursday11" v-bind:class="session.type" >
                <h5>{{session.subject_name}}</h5>
                <h5>{{session.type}} ( {{session.lecturer}} )</h5>
                <h5>{{session.start_time}} - {{session.end_time}} ( {{session.duration}} hours )</h5>
                <h5>{{session.venue}}</h5>
            </td>
            <td v-if="thursday11.length === 0" class="no-bg" >&nbsp;</td>

            <td v-for="session in friday11" v-bind:class="session.type" >
                <h5>{{session.subject_name}}</h5>
                <h5>{{session.type}} ( {{session.lecturer}} )</h5>
                <h5>{{session.start_time}} - {{session.end_time}} ( {{session.duration}} hours )</h5>
                <h5>{{session.venue}}</h5>
            </td>
            <td v-if="friday11.length === 0" class="no-bg" >&nbsp;</td>
        </tr>

        <tr class="data">
            <td v-for="session in monday12" v-bind:class="session.type" >
                <h5>{{session.subject_name}}</h5>
                <h5>{{session.type}} ( {{session.lecturer}} )</h5>
                <h5>{{session.start_time}} - {{session.end_time}} ( {{session.duration}} hours )</h5>
                <h5>{{session.venue}}</h5>
            </td>
            <td v-if="monday12.length === 0" class="no-bg" >&nbsp;</td>

            <td v-for="session in tuesday12" v-bind:class="session.type" >
                <h5>{{session.subject_name}}</h5>
                <h5>{{session.type}} ( {{session.lecturer}} )</h5>
                <h5>{{session.start_time}} - {{session.end_time}} ( {{session.duration}} hours )</h5>
                <h5>{{session.venue}}</h5>
            </td>
            <td v-if="tuesday12.length === 0" class="no-bg" >&nbsp;</td>

            <td v-for="session in wednesday12" v-bind:class="session.type" >
                <h5>{{session.subject_name}}</h5>
                <h5>{{session.type}} ( {{session.lecturer}} )</h5>
                <h5>{{session.start_time}} - {{session.end_time}} ( {{session.duration}} hours )</h5>
                <h5>{{session.venue}}</h5>
            </td>
            <td v-if="wednesday12.length === 0" class="no-bg" >&nbsp;</td>

            <td v-for="session in thursday12" v-bind:class="session.type" >
                <h5>{{session.subject_name}}</h5>
                <h5>{{session.type}} ( {{session.lecturer}} )</h5>
                <h5>{{session.start_time}} - {{session.end_time}} ( {{session.duration}} hours )</h5>
                <h5>{{session.venue}}</h5>
            </td>
            <td v-if="thursday12.length === 0" class="no-bg" >&nbsp;</td>

            <td v-for="session in friday12" v-bind:class="session.type" >
                <h5>{{session.subject_name}}</h5>
                <h5>{{session.type}} ( {{session.lecturer}} )</h5>
                <h5>{{session.start_time}} - {{session.end_time}} ( {{session.duration}} hours )</h5>
                <h5>{{session.venue}}</h5>
            </td>
            <td v-if="friday12.length === 0" class="no-bg" >&nbsp;</td>
        </tr>

        <tr class="data">
            <td v-for="session in monday13" v-bind:class="session.type" >
                <h5>{{session.subject_name}}</h5>
                <h5>{{session.type}} ( {{session.lecturer}} )</h5>
                <h5>{{session.start_time}} - {{session.end_time}} ( {{session.duration}} hours )</h5>
                <h5>{{session.venue}}</h5>
            </td>
            <td v-if="monday13.length === 0" class="no-bg" >&nbsp;</td>

            <td v-for="session in tuesday13" v-bind:class="session.type" >
                <h5>{{session.subject_name}}</h5>
                <h5>{{session.type}} ( {{session.lecturer}} )</h5>
                <h5>{{session.start_time}} - {{session.end_time}} ( {{session.duration}} hours )</h5>
                <h5>{{session.venue}}</h5>
            </td>
            <td v-if="tuesday13.length === 0" class="no-bg" >&nbsp;</td>

            <td v-for="session in wednesday13" v-bind:class="session.type" >
                <h5>{{session.subject_name}}</h5>
                <h5>{{session.type}} ( {{session.lecturer}} )</h5>
                <h5>{{session.start_time}} - {{session.end_time}} ( {{session.duration}} hours )</h5>
                <h5>{{session.venue}}</h5>
            </td>
            <td v-if="wednesday13.length === 0" class="no-bg" >&nbsp;</td>

            <td v-for="session in thursday13" v-bind:class="session.type" >
                <h5>{{session.subject_name}}</h5>
                <h5>{{session.type}} ( {{session.lecturer}} )</h5>
                <h5>{{session.start_time}} - {{session.end_time}} ( {{session.duration}} hours )</h5>
                <h5>{{session.venue}}</h5>
            </td>
            <td v-if="thursday13.length === 0" class="no-bg" >&nbsp;</td>

            <td v-for="session in friday13" v-bind:class="session.type" >
                <h5>{{session.subject_name}}</h5>
                <h5>{{session.type}} ( {{session.lecturer}} )</h5>
                <h5>{{session.start_time}} - {{session.end_time}} ( {{session.duration}} hours )</h5>
                <h5>{{session.venue}}</h5>
            </td>
            <td v-if="friday13.length === 0" class="no-bg" >&nbsp;</td>
        </tr>

        <tr class="data">
            <td v-for="session in monday14" v-bind:class="session.type" >
                <h5>{{session.subject_name}}</h5>
                <h5>{{session.type}} ( {{session.lecturer}} )</h5>
                <h5>{{session.start_time}} - {{session.end_time}} ( {{session.duration}} hours )</h5>
                <h5>{{session.venue}}</h5>
            </td>
            <td v-if="monday14.length === 0" class="no-bg" >&nbsp;</td>

            <td v-for="session in tuesday14" v-bind:class="session.type" >
                <h5>{{session.subject_name}}</h5>
                <h5>{{session.type}} ( {{session.lecturer}} )</h5>
                <h5>{{session.start_time}} - {{session.end_time}} ( {{session.duration}} hours )</h5>
                <h5>{{session.venue}}</h5>
            </td>
            <td v-if="tuesday14.length === 0" class="no-bg" >&nbsp;</td>

            <td v-for="session in wednesday14" v-bind:class="session.type" >
                <h5>{{session.subject_name}}</h5>
                <h5>{{session.type}} ( {{session.lecturer}} )</h5>
                <h5>{{session.start_time}} - {{session.end_time}} ( {{session.duration}} hours )</h5>
                <h5>{{session.venue}}</h5>
            </td>
            <td v-if="wednesday14.length === 0" class="no-bg" >&nbsp;</td>

            <td v-for="session in thursday14" v-bind:class="session.type" >
                <h5>{{session.subject_name}}</h5>
                <h5>{{session.type}} ( {{session.lecturer}} )</h5>
                <h5>{{session.start_time}} - {{session.end_time}} ( {{session.duration}} hours )</h5>
                <h5>{{session.venue}}</h5>
            </td>
            <td v-if="thursday14.length === 0" class="no-bg" >&nbsp;</td>

            <td v-for="session in friday14" v-bind:class="session.type" >
                <h5>{{session.subject_name}}</h5>
                <h5>{{session.type}} ( {{session.lecturer}} )</h5>
                <h5>{{session.start_time}} - {{session.end_time}} ( {{session.duration}} hours )</h5>
                <h5>{{session.venue}}</h5>
            </td>
            <td v-if="friday14.length === 0" class="no-bg" >&nbsp;</td>
        </tr>

        <tr class="data">
            <td v-for="session in monday15" v-bind:class="session.type" >
                <h5>{{session.subject_name}}</h5>
                <h5>{{session.type}} ( {{session.lecturer}} )</h5>
                <h5>{{session.start_time}} - {{session.end_time}} ( {{session.duration}} hours )</h5>
                <h5>{{session.venue}}</h5>
            </td>
            <td v-if="monday15.length === 0" class="no-bg" >&nbsp;</td>

            <td v-for="session in tuesday15" v-bind:class="session.type" >
                <h5>{{session.subject_name}}</h5>
                <h5>{{session.type}} ( {{session.lecturer}} )</h5>
                <h5>{{session.start_time}} - {{session.end_time}} ( {{session.duration}} hours )</h5>
                <h5>{{session.venue}}</h5>
            </td>
            <td v-if="tuesday15.length === 0" class="no-bg" >&nbsp;</td>

            <td v-for="session in wednesday15" v-bind:class="session.type" >
                <h5>{{session.subject_name}}</h5>
                <h5>{{session.type}} ( {{session.lecturer}} )</h5>
                <h5>{{session.start_time}} - {{session.end_time}} ( {{session.duration}} hours )</h5>
                <h5>{{session.venue}}</h5>
            </td>
            <td v-if="wednesday15.length === 0" class="no-bg" >&nbsp;</td>

            <td v-for="session in thursday15" v-bind:class="session.type" >
                <h5>{{session.subject_name}}</h5>
                <h5>{{session.type}} ( {{session.lecturer}} )</h5>
                <h5>{{session.start_time}} - {{session.end_time}} ( {{session.duration}} hours )</h5>
                <h5>{{session.venue}}</h5>
            </td>
            <td v-if="thursday15.length === 0" class="no-bg" >&nbsp;</td>

            <td v-for="session in friday15" v-bind:class="session.type" >
                <h5>{{session.subject_name}}</h5>
                <h5>{{session.type}} ( {{session.lecturer}} )</h5>
                <h5>{{session.start_time}} - {{session.end_time}} ( {{session.duration}} hours )</h5>
                <h5>{{session.venue}}</h5>
            </td>
            <td v-if="friday15.length === 0" class="no-bg" >&nbsp;</td>
        </tr>

        <tr class="data">
            <td v-for="session in monday16" v-bind:class="session.type" >
                <h5>{{session.subject_name}}</h5>
                <h5>{{session.type}} ( {{session.lecturer}} )</h5>
                <h5>{{session.start_time}} - {{session.end_time}} ( {{session.duration}} hours )</h5>
                <h5>{{session.venue}}</h5>
            </td>
            <td v-if="monday16.length === 0" class="no-bg" >&nbsp;</td>

            <td v-for="session in tuesday16" v-bind:class="session.type" >
                <h5>{{session.subject_name}}</h5>
                <h5>{{session.type}} ( {{session.lecturer}} )</h5>
                <h5>{{session.start_time}} - {{session.end_time}} ( {{session.duration}} hours )</h5>
                <h5>{{session.venue}}</h5>
            </td>
            <td v-if="tuesday16.length === 0" class="no-bg" >&nbsp;</td>

            <td v-for="session in wednesday16" v-bind:class="session.type" >
                <h5>{{session.subject_name}}</h5>
                <h5>{{session.type}} ( {{session.lecturer}} )</h5>
                <h5>{{session.start_time}} - {{session.end_time}} ( {{session.duration}} hours )</h5>
                <h5>{{session.venue}}</h5>
            </td>
            <td v-if="wednesday16.length === 0" class="no-bg" >&nbsp;</td>

            <td v-for="session in thursday16" v-bind:class="session.type" >
                <h5>{{session.subject_name}}</h5>
                <h5>{{session.type}} ( {{session.lecturer}} )</h5>
                <h5>{{session.start_time}} - {{session.end_time}} ( {{session.duration}} hours )</h5>
                <h5>{{session.venue}}</h5>
            </td>
            <td v-if="thursday16.length === 0" class="no-bg" >&nbsp;</td>

            <td v-for="session in friday16" v-bind:class="session.type" >
                <h5>{{session.subject_name}}</h5>
                <h5>{{session.type}} ( {{session.lecturer}} )</h5>
                <h5>{{session.start_time}} - {{session.end_time}} ( {{session.duration}} hours )</h5>
                <h5>{{session.venue}}</h5>
            </td>
            <td v-if="friday16.length === 0" class="no-bg" >&nbsp;</td>
        </tr>

        <tr class="data">
            <td v-for="session in monday17" v-bind:class="session.type" >
                <h5>{{session.subject_name}}</h5>
                <h5>{{session.type}} ( {{session.lecturer}} )</h5>
                <h5>{{session.start_time}} - {{session.end_time}} ( {{session.duration}} hours )</h5>
                <h5>{{session.venue}}</h5>
            </td>
            <td v-if="monday17.length === 0" class="no-bg" >&nbsp;</td>

            <td v-for="session in tuesday17" v-bind:class="session.type" >
                <h5>{{session.subject_name}}</h5>
                <h5>{{session.type}} ( {{session.lecturer}} )</h5>
                <h5>{{session.start_time}} - {{session.end_time}} ( {{session.duration}} hours )</h5>
                <h5>{{session.venue}}</h5>
            </td>
            <td v-if="tuesday17.length === 0" class="no-bg" >&nbsp;</td>

            <td v-for="session in wednesday17" v-bind:class="session.type" >
                <h5>{{session.subject_name}}</h5>
                <h5>{{session.type}} ( {{session.lecturer}} )</h5>
                <h5>{{session.start_time}} - {{session.end_time}} ( {{session.duration}} hours )</h5>
                <h5>{{session.venue}}</h5>
            </td>
            <td v-if="wednesday17.length === 0" class="no-bg" >&nbsp;</td>

            <td v-for="session in thursday17" v-bind:class="session.type" >
                <h5>{{session.subject_name}}</h5>
                <h5>{{session.type}} ( {{session.lecturer}} )</h5>
                <h5>{{session.start_time}} - {{session.end_time}} ( {{session.duration}} hours )</h5>
                <h5>{{session.venue}}</h5>
            </td>
            <td v-if="thursday17.length === 0" class="no-bg" >&nbsp;</td>

            <td v-for="session in friday17" v-bind:class="session.type" >
                <h5>{{session.subject_name}}</h5>
                <h5>{{session.type}} ( {{session.lecturer}} )</h5>
                <h5>{{session.start_time}} - {{session.end_time}} ( {{session.duration}} hours )</h5>
                <h5>{{session.venue}}</h5>
            </td>
            <td v-if="friday17.length === 0" class="no-bg" >&nbsp;</td>
        </tr>


    </table>
</template>

<script>
    export default {
        data() {
            return {
                enrolledSessions: [],
            }
        },
        created() {
            axios.get('api/enrolledSessions').then((res) => {
                this.enrolledSessions = res.data;
                if (this.enrolledSessions.length === 0) {

                }
            });
        },

        computed: {
            monday: function () {
                return this.enrolledSessions.filter(function (session) {
                    return session.day === 'Monday';
                })
            },
            monday8: function () {
                return this.enrolledSessions.filter(function (session) {
                    return session.day === 'Monday' && session.start_time === '08:00:00';
                })
            },
            monday9: function () {
                return this.enrolledSessions.filter(function (session) {
                    return session.day === 'Monday' && session.start_time === '09:00:00';
                })
            },
            monday10: function () {
                return this.enrolledSessions.filter(function (session) {
                    return session.day === 'Monday' && session.start_time === '10:00:00';
                })
            },
            monday11: function () {
                return this.enrolledSessions.filter(function (session) {
                    return session.day === 'Monday' && session.start_time === '11:00:00';
                })
            },
            monday12: function () {
                return this.enrolledSessions.filter(function (session) {
                    return session.day === 'Monday' && session.start_time === '12:00:00';
                })
            },
            monday13: function () {
                return this.enrolledSessions.filter(function (session) {
                    return session.day === 'Monday' && session.start_time === '13:00:00';
                })
            },
            monday14: function () {
                return this.enrolledSessions.filter(function (session) {
                    return session.day === 'Monday' && session.start_time === '14:00:00';
                })
            },
            monday15: function () {
                return this.enrolledSessions.filter(function (session) {
                    return session.day === 'Monday' && session.start_time === '15:00:00';
                })
            },
            monday16: function () {
                return this.enrolledSessions.filter(function (session) {
                    return session.day === 'Monday' && session.start_time === '16:00:00';
                })
            },
            monday17: function () {
                return this.enrolledSessions.filter(function (session) {
                    return session.day === 'Monday' && session.start_time === '17:00:00';
                })
            },
            tuesday: function () {
                return this.enrolledSessions.filter(function (session) {
                    return session.day === 'Tuesday';
                })
            },
            tuesday8: function () {
                return this.enrolledSessions.filter(function (session) {
                    return session.day === 'Tuesday' && session.start_time === '08:00:00';
                })
            },
            tuesday9: function () {
                return this.enrolledSessions.filter(function (session) {
                    return session.day === 'Tuesday' && session.start_time === '09:00:00';
                })
            },
            tuesday10: function () {
                return this.enrolledSessions.filter(function (session) {
                    return session.day === 'Tuesday' && session.start_time === '10:00:00';
                })
            },
            tuesday11: function () {
                return this.enrolledSessions.filter(function (session) {
                    return session.day === 'Tuesday' && session.start_time === '1:00:00';
                })
            },
            tuesday12: function () {
                return this.enrolledSessions.filter(function (session) {
                    return session.day === 'Tuesday' && session.start_time === '12:00:00';
                })
            },
            tuesday13: function () {
                return this.enrolledSessions.filter(function (session) {
                    return session.day === 'Tuesday' && session.start_time === '13:00:00';
                })
            },
            tuesday14: function () {
                return this.enrolledSessions.filter(function (session) {
                    return session.day === 'Tuesday' && session.start_time === '14:00:00';
                })
            },
            tuesday15: function () {
                return this.enrolledSessions.filter(function (session) {
                    return session.day === 'Tuesday' && session.start_time === '15:00:00';
                })
            },
            tuesday16: function () {
                return this.enrolledSessions.filter(function (session) {
                    return session.day === 'Tuesday' && session.start_time === '16:00:00';
                })
            },
            tuesday17: function () {
                return this.enrolledSessions.filter(function (session) {
                    return session.day === 'Tuesday' && session.start_time === '17:00:00';
                })
            },
            wednesday: function () {
                return this.enrolledSessions.filter(function (session) {
                    return session.day === 'Wednesday';
                })
            },
            wednesday8: function () {
                return this.enrolledSessions.filter(function (session) {
                    return session.day === 'Wednesday' && session.start_time === '08:00:00';
                })
            },
            wednesday9: function () {
                return this.enrolledSessions.filter(function (session) {
                    return session.day === 'Wednesday' && session.start_time === '09:00:00';
                })
            },
            wednesday10: function () {
                return this.enrolledSessions.filter(function (session) {
                    return session.day === 'Wednesday' && session.start_time === '10:00:00';
                })
            },
            wednesday11: function () {
                return this.enrolledSessions.filter(function (session) {
                    return session.day === 'Wednesday' && session.start_time === '11:00:00';
                })
            },
            wednesday12: function () {
                return this.enrolledSessions.filter(function (session) {
                    return session.day === 'Wednesday' && session.start_time === '12:00:00';
                })
            },
            wednesday13: function () {
                return this.enrolledSessions.filter(function (session) {
                    return session.day === 'Wednesday' && session.start_time === '13:00:00';
                })
            },
            wednesday14: function () {
                return this.enrolledSessions.filter(function (session) {
                    return session.day === 'Wednesday' && session.start_time === '14:00:00';
                })
            },
            wednesday15: function () {
                return this.enrolledSessions.filter(function (session) {
                    return session.day === 'Wednesday' && session.start_time === '15:00:00';
                })
            },
            wednesday16: function () {
                return this.enrolledSessions.filter(function (session) {
                    return session.day === 'Wednesday' && session.start_time === '16:00:00';
                })
            },
            wednesday17: function () {
                return this.enrolledSessions.filter(function (session) {
                    return session.day === 'Wednesday' && session.start_time === '17:00:00';
                })
            },
            thursday: function () {
                return this.enrolledSessions.filter(function (session) {
                    return session.day === 'Thursday';
                })
            },
            thursday8: function () {
                return this.enrolledSessions.filter(function (session) {
                    return session.day === 'Thursday' && session.start_time === '08:00:00';
                })
            },
            thursday9: function () {
                return this.enrolledSessions.filter(function (session) {
                    return session.day === 'Thursday' && session.start_time === '09:00:00';
                })
            },
            thursday10: function () {
                return this.enrolledSessions.filter(function (session) {
                    return session.day === 'Thursday' && session.start_time === '10:00:00';
                })
            },
            thursday11: function () {
                return this.enrolledSessions.filter(function (session) {
                    return session.day === 'Thursday' && session.start_time === '11:00:00';
                })
            },
            thursday12: function () {
                return this.enrolledSessions.filter(function (session) {
                    return session.day === 'Thursday' && session.start_time === '12:00:00';
                })
            },
            thursday13: function () {
                return this.enrolledSessions.filter(function (session) {
                    return session.day === 'Thursday' && session.start_time === '13:00:00';
                })
            },
            thursday14: function () {
                return this.enrolledSessions.filter(function (session) {
                    return session.day === 'Thursday' && session.start_time === '14:00:00';
                })
            },
            thursday15: function () {
                return this.enrolledSessions.filter(function (session) {
                    return session.day === 'Thursday' && session.start_time === '15:00:00';
                })
            },
            thursday16: function () {
                return this.enrolledSessions.filter(function (session) {
                    return session.day === 'Thursday' && session.start_time === '16:00:00';
                })
            },
            thursday17: function () {
                return this.enrolledSessions.filter(function (session) {
                    return session.day === 'Thursday' && session.start_time === '17:00:00';
                })
            },
            friday: function () {
                return this.enrolledSessions.filter(function (session) {
                    return session.day === 'Friday';
                })
            },
            friday8: function () {
                return this.enrolledSessions.filter(function (session) {
                    return session.day === 'Friday' && session.start_time === '08:00:00';
                })
            },
            friday9: function () {
                return this.enrolledSessions.filter(function (session) {
                    return session.day === 'Friday' && session.start_time === '09:00:00';
                })
            },
            friday10: function () {
                return this.enrolledSessions.filter(function (session) {
                    return session.day === 'Friday' && session.start_time === '10:00:00';
                })
            },
            friday11: function () {
                return this.enrolledSessions.filter(function (session) {
                    return session.day === 'Friday' && session.start_time === '11:00:00';
                })
            },
            friday12: function () {
                return this.enrolledSessions.filter(function (session) {
                    return session.day === 'Friday' && session.start_time === '12:00:00';
                })
            },
            friday13: function () {
                return this.enrolledSessions.filter(function (session) {
                    return session.day === 'Friday' && session.start_time === '13:00:00';
                })
            },
            friday14: function () {
                return this.enrolledSessions.filter(function (session) {
                    return session.day === 'Friday' && session.start_time === '14:00:00';
                })
            },
            friday15: function () {
                return this.enrolledSessions.filter(function (session) {
                    return session.day === 'Friday' && session.start_time === '15:00:00';
                })
            },
            friday16: function () {
                return this.enrolledSessions.filter(function (session) {
                    return session.day === 'Friday' && session.start_time === '16:00:00';
                })
            },
            friday17: function () {
                return this.enrolledSessions.filter(function (session) {
                    return session.day === 'Friday' && session.start_time === '17:00:00';
                })
            },
        }
    }
</script>