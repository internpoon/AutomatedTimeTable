<template>
    <div class="form-group">
        <label>Subject List (Maximum 5 subjects)</label>

        <div v-for="subject in subjects">
            <input type="checkbox" v-model="selected" v-bind:value="subject" v-if="selected.length === 5 && !selected.includes(subject)" disabled>
            <input type="checkbox" v-model="selected" v-bind:value="subject" v-else >
            <label class="nice-label">{{subject.name}}</label>
        </div>

        <div v-if="selected.length > 0">
            <table border="1">
                <tr class="row_grey">
                    <th v-bind:colspan="maxMonday">Monday</th>
                    <th v-bind:colspan="maxTuesday">Tuesday</th>
                    <th v-bind:colspan="maxWednesday">Wednesday</th>
                    <th v-bind:colspan="maxThursday">Thursday</th>
                    <th v-bind:colspan="maxFriday">Friday</th>
                </tr>

                <tr class="data">
                    <td v-for="session in monday8" v-bind:class="session.type" v-bind:colspan="mon8col">
                        <h5>{{session.subject_name}}</h5>
                        <h5>{{session.type}}</h5>
                        <h5>{{session.start_time}} - {{session.end_time}}</h5>
                        <input type="checkbox" v-model="selectedSessions" v-bind:value="session">
                    </td>
                    <td v-if="monday8.length === 0" class="no-bg" v-bind:colspan="mon8col">&nbsp;</td>

                    <td v-for="session in tuesday8" v-bind:class="session.type" v-bind:colspan="tue8col">
                        <h5>{{session.subject_name}}</h5>
                        <h5>{{session.type}}</h5>
                        <h5>{{session.start_time}} - {{session.end_time}}</h5>
                        <input type="checkbox" v-model="selectedSessions" v-bind:value="session">
                    </td>
                    <td v-if="tuesday8.length === 0" class="no-bg" v-bind:colspan="tue8col">&nbsp;</td>

                    <td v-for="session in wednesday8" v-bind:class="session.type" v-bind:colspan="wed8col">
                        <h5>{{session.subject_name}}</h5>
                        <h5>{{session.type}}</h5>
                        <h5>{{session.start_time}} - {{session.end_time}}</h5>
                        <input type="checkbox" v-model="selectedSessions" v-bind:value="session">
                    </td>
                    <td v-if="wednesday8.length === 0" class="no-bg" v-bind:colspan="wed8col">&nbsp;</td>

                    <td v-for="session in thursday8" v-bind:class="session.type" v-bind:colspan="thu8col">
                        <h5>{{session.subject_name}}</h5>
                        <h5>{{session.type}}</h5>
                        <h5>{{session.start_time}} - {{session.end_time}}</h5>
                        <input type="checkbox" v-model="selectedSessions" v-bind:value="session">
                    </td>
                    <td v-if="thursday8.length === 0" class="no-bg" v-bind:colspan="thu8col">&nbsp;</td>

                    <td v-for="session in friday8" v-bind:class="session.type" v-bind:colspan="fri8col">
                        <h5>{{session.subject_name}}</h5>
                        <h5>{{session.type}}</h5>
                        <h5>{{session.start_time}} - {{session.end_time}}</h5>
                        <input type="checkbox" v-model="selectedSessions" v-bind:value="session">
                    </td>
                    <td v-if="friday8.length === 0" class="no-bg" v-bind:colspan="fri8col">&nbsp;</td>
                </tr>

                <tr class="data">
                    <td v-for="session in monday9" v-bind:class="session.type" v-bind:colspan="mon9col">
                        <h5>{{session.subject_name}}</h5>
                        <h5>{{session.type}}</h5>
                        <h5>{{session.start_time}} - {{session.end_time}}</h5>
                        <input type="checkbox" v-model="selectedSessions" v-bind:value="session">
                    </td>
                    <td v-if="monday9.length === 0" class="no-bg" v-bind:colspan="mon9col">&nbsp;</td>

                    <td v-for="session in tuesday9" v-bind:class="session.type" v-bind:colspan="tue9col">
                        <h5>{{session.subject_name}}</h5>
                        <h5>{{session.type}}</h5>
                        <h5>{{session.start_time}} - {{session.end_time}}</h5>
                        <input type="checkbox" v-model="selectedSessions" v-bind:value="session">
                    </td>
                    <td v-if="tuesday9.length === 0" class="no-bg" v-bind:colspan="tue9col">&nbsp;</td>

                    <td v-for="session in wednesday9" v-bind:class="session.type" v-bind:colspan="wed9col">
                        <h5>{{session.subject_name}}</h5>
                        <h5>{{session.type}}</h5>
                        <h5>{{session.start_time}} - {{session.end_time}}</h5>
                        <input type="checkbox" v-model="selectedSessions" v-bind:value="session">
                    </td>
                    <td v-if="wednesday9.length === 0" class="no-bg" v-bind:colspan="wed9col">&nbsp;</td>

                    <td v-for="session in thursday9" v-bind:class="session.type" v-bind:colspan="thu9col">
                        <h5>{{session.subject_name}}</h5>
                        <h5>{{session.type}}</h5>
                        <h5>{{session.start_time}} - {{session.end_time}}</h5>
                        <input type="checkbox" v-model="selectedSessions" v-bind:value="session">
                    </td>
                    <td v-if="thursday9.length === 0" class="no-bg" v-bind:colspan="thu9col">&nbsp;</td>

                    <td v-for="session in friday9" v-bind:class="session.type" v-bind:colspan="fri9col">
                        <h5>{{session.subject_name}}</h5>
                        <h5>{{session.type}}</h5>
                        <h5>{{session.start_time}} - {{session.end_time}}</h5>
                        <input type="checkbox" v-model="selectedSessions" v-bind:value="session">
                    </td>
                    <td v-if="friday9.length === 0" class="no-bg" v-bind:colspan="fri9col">&nbsp;</td>
                </tr>

                <tr class="data">
                    <td v-for="session in monday10" v-bind:class="session.type" v-bind:colspan="mon10col">
                        <h5>{{session.subject_name}}</h5>
                        <h5>{{session.type}}</h5>
                        <h5>{{session.start_time}} - {{session.end_time}}</h5>
                        <input type="checkbox" v-model="selectedSessions" v-bind:value="session">
                    </td>
                    <td v-if="monday10.length === 0" class="no-bg" v-bind:colspan="mon10col">&nbsp;</td>

                    <td v-for="session in tuesday10" v-bind:class="session.type" v-bind:colspan="tue10col">
                        <h5>{{session.subject_name}}</h5>
                        <h5>{{session.type}}</h5>
                        <h5>{{session.start_time}} - {{session.end_time}}</h5>
                        <input type="checkbox" v-model="selectedSessions" v-bind:value="session">
                    </td>
                    <td v-if="tuesday10.length === 0" class="no-bg" v-bind:colspan="tue10col">&nbsp;</td>

                    <td v-for="session in wednesday10" v-bind:class="session.type" v-bind:colspan="wed10col">
                        <h5>{{session.subject_name}}</h5>
                        <h5>{{session.type}}</h5>
                        <h5>{{session.start_time}} - {{session.end_time}}</h5>
                        <input type="checkbox" v-model="selectedSessions" v-bind:value="session">
                    </td>
                    <td v-if="wednesday10.length === 0" class="no-bg" v-bind:colspan="wed10col">&nbsp;</td>

                    <td v-for="session in thursday10" v-bind:class="session.type" v-bind:colspan="thu10col">
                        <h5>{{session.subject_name}}</h5>
                        <h5>{{session.type}}</h5>
                        <h5>{{session.start_time}} - {{session.end_time}}</h5>
                        <input type="checkbox" v-model="selectedSessions" v-bind:value="session">
                    </td>
                    <td v-if="thursday10.length === 0" class="no-bg" v-bind:colspan="thu10col">&nbsp;</td>

                    <td v-for="session in friday10" v-bind:class="session.type" v-bind:colspan="fri10col">
                        <h5>{{session.subject_name}}</h5>
                        <h5>{{session.type}}</h5>
                        <h5>{{session.start_time}} - {{session.end_time}}</h5>
                        <input type="checkbox" v-model="selectedSessions" v-bind:value="session">
                    </td>
                    <td v-if="friday10.length === 0" class="no-bg" v-bind:colspan="fri10col">&nbsp;</td>
                </tr>

                <tr class="data">
                    <td v-for="session in monday11" v-bind:class="session.type" v-bind:colspan="mon11col">
                        <h5>{{session.subject_name}}</h5>
                        <h5>{{session.type}}</h5>
                        <h5>{{session.start_time}} - {{session.end_time}}</h5>
                        <input type="checkbox" v-model="selectedSessions" v-bind:value="session">
                    </td>
                    <td v-if="monday11.length === 0" class="no-bg" v-bind:colspan="mon11col">&nbsp;</td>

                    <td v-for="session in tuesday11" v-bind:class="session.type" v-bind:colspan="tue11col">
                        <h5>{{session.subject_name}}</h5>
                        <h5>{{session.type}}</h5>
                        <h5>{{session.start_time}} - {{session.end_time}}</h5>
                        <input type="checkbox" v-model="selectedSessions" v-bind:value="session">
                    </td>
                    <td v-if="tuesday11.length === 0" class="no-bg" v-bind:colspan="tue11col">&nbsp;</td>

                    <td v-for="session in wednesday11" v-bind:class="session.type" v-bind:colspan="wed11col">
                        <h5>{{session.subject_name}}</h5>
                        <h5>{{session.type}}</h5>
                        <h5>{{session.start_time}} - {{session.end_time}}</h5>
                        <input type="checkbox" v-model="selectedSessions" v-bind:value="session">
                    </td>
                    <td v-if="wednesday11.length === 0" class="no-bg" v-bind:colspan="wed11col">&nbsp;</td>

                    <td v-for="session in thursday11" v-bind:class="session.type" v-bind:colspan="thu11col">
                        <h5>{{session.subject_name}}</h5>
                        <h5>{{session.type}}</h5>
                        <h5>{{session.start_time}} - {{session.end_time}}</h5>
                        <input type="checkbox" v-model="selectedSessions" v-bind:value="session">
                    </td>
                    <td v-if="thursday11.length === 0" class="no-bg" v-bind:colspan="thu11col">&nbsp;</td>

                    <td v-for="session in friday11" v-bind:class="session.type" v-bind:colspan="fri11col">
                        <h5>{{session.subject_name}}</h5>
                        <h5>{{session.type}}</h5>
                        <h5>{{session.start_time}} - {{session.end_time}}</h5>
                        <input type="checkbox" v-model="selectedSessions" v-bind:value="session">
                    </td>
                    <td v-if="friday11.length === 0" class="no-bg" v-bind:colspan="fri11col">&nbsp;</td>
                </tr>

                <tr class="data">
                    <td v-for="session in monday12" v-bind:class="session.type" v-bind:colspan="mon12col">
                        <h5>{{session.subject_name}}</h5>
                        <h5>{{session.type}}</h5>
                        <h5>{{session.start_time}} - {{session.end_time}}</h5>
                        <input type="checkbox" v-model="selectedSessions" v-bind:value="session">
                    </td>
                    <td v-if="monday12.length === 0" class="no-bg" v-bind:colspan="mon12col">&nbsp;</td>

                    <td v-for="session in tuesday12" v-bind:class="session.type" v-bind:colspan="tue12col">
                        <h5>{{session.subject_name}}</h5>
                        <h5>{{session.type}}</h5>
                        <h5>{{session.start_time}} - {{session.end_time}}</h5>
                        <input type="checkbox" v-model="selectedSessions" v-bind:value="session">
                    </td>
                    <td v-if="tuesday12.length === 0" class="no-bg" v-bind:colspan="tue12col">&nbsp;</td>

                    <td v-for="session in wednesday12" v-bind:class="session.type" v-bind:colspan="wed12col">
                        <h5>{{session.subject_name}}</h5>
                        <h5>{{session.type}}</h5>
                        <h5>{{session.start_time}} - {{session.end_time}}</h5>
                        <input type="checkbox" v-model="selectedSessions" v-bind:value="session">
                    </td>
                    <td v-if="wednesday12.length === 0" class="no-bg" v-bind:colspan="wed12col">&nbsp;</td>

                    <td v-for="session in thursday12" v-bind:class="session.type" v-bind:colspan="thu11col">
                        <h5>{{session.subject_name}}</h5>
                        <h5>{{session.type}}</h5>
                        <h5>{{session.start_time}} - {{session.end_time}}</h5>
                        <input type="checkbox" v-model="selectedSessions" v-bind:value="session">
                    </td>
                    <td v-if="thursday12.length === 0" class="no-bg" v-bind:colspan="thu11col">&nbsp;</td>

                    <td v-for="session in friday12" v-bind:class="session.type" v-bind:colspan="fri11col">
                        <h5>{{session.subject_name}}</h5>
                        <h5>{{session.type}}</h5>
                        <h5>{{session.start_time}} - {{session.end_time}}</h5>
                        <input type="checkbox" v-model="selectedSessions" v-bind:value="session">
                    </td>
                    <td v-if="friday12.length === 0" class="no-bg" v-bind:colspan="fri11col">&nbsp;</td>
                </tr>

                <tr class="data">
                    <td v-for="session in monday13" v-bind:class="session.type" v-bind:colspan="mon13col">
                        <h5>{{session.subject_name}}</h5>
                        <h5>{{session.type}}</h5>
                        <h5>{{session.start_time}} - {{session.end_time}}</h5>
                        <input type="checkbox" v-model="selectedSessions" v-bind:value="session">
                    </td>
                    <td v-if="monday13.length === 0" class="no-bg" v-bind:colspan="mon13col">&nbsp;</td>

                    <td v-for="session in tuesday13" v-bind:class="session.type" v-bind:colspan="tue13col">
                        <h5>{{session.subject_name}}</h5>
                        <h5>{{session.type}}</h5>
                        <h5>{{session.start_time}} - {{session.end_time}}</h5>
                        <input type="checkbox" v-model="selectedSessions" v-bind:value="session">
                    </td>
                    <td v-if="tuesday13.length === 0" class="no-bg" v-bind:colspan="tue13col">&nbsp;</td>

                    <td v-for="session in wednesday13" v-bind:class="session.type" v-bind:colspan="wed13col">
                        <h5>{{session.subject_name}}</h5>
                        <h5>{{session.type}}</h5>
                        <h5>{{session.start_time}} - {{session.end_time}}</h5>
                        <input type="checkbox" v-model="selectedSessions" v-bind:value="session">
                    </td>
                    <td v-if="wednesday13.length === 0" class="no-bg" v-bind:colspan="wed13col">&nbsp;</td>

                    <td v-for="session in thursday13" v-bind:class="session.type" v-bind:colspan="thu13col">
                        <h5>{{session.subject_name}}</h5>
                        <h5>{{session.type}}</h5>
                        <h5>{{session.start_time}} - {{session.end_time}}</h5>
                        <input type="checkbox" v-model="selectedSessions" v-bind:value="session">
                    </td>
                    <td v-if="thursday13.length === 0" class="no-bg" v-bind:colspan="thu13col">&nbsp;</td>

                    <td v-for="session in friday13" v-bind:class="session.type" v-bind:colspan="fri13col">
                        <h5>{{session.subject_name}}</h5>
                        <h5>{{session.type}}</h5>
                        <h5>{{session.start_time}} - {{session.end_time}}</h5>
                        <input type="checkbox" v-model="selectedSessions" v-bind:value="session">
                    </td>
                    <td v-if="friday13.length === 0" class="no-bg" v-bind:colspan="fri13col">&nbsp;</td>
                </tr>

                <tr class="data">
                    <td v-for="session in monday14" v-bind:class="session.type" v-bind:colspan="mon14col">
                        <h5>{{session.subject_name}}</h5>
                        <h5>{{session.type}}</h5>
                        <h5>{{session.start_time}} - {{session.end_time}}</h5>
                        <input type="checkbox" v-model="selectedSessions" v-bind:value="session">
                    </td>
                    <td v-if="monday14.length === 0" class="no-bg" v-bind:colspan="mon14col">&nbsp;</td>

                    <td v-for="session in tuesday14" v-bind:class="session.type" v-bind:colspan="tue14col">
                        <h5>{{session.subject_name}}</h5>
                        <h5>{{session.type}}</h5>
                        <h5>{{session.start_time}} - {{session.end_time}}</h5>
                        <input type="checkbox" v-model="selectedSessions" v-bind:value="session">
                    </td>
                    <td v-if="tuesday14.length === 0" class="no-bg" v-bind:colspan="tue14col">&nbsp;</td>

                    <td v-for="session in wednesday14" v-bind:class="session.type" v-bind:colspan="wed14col">
                        <h5>{{session.subject_name}}</h5>
                        <h5>{{session.type}}</h5>
                        <h5>{{session.start_time}} - {{session.end_time}}</h5>
                        <input type="checkbox" v-model="selectedSessions" v-bind:value="session">
                    </td>
                    <td v-if="wednesday14.length === 0" class="no-bg" v-bind:colspan="wed14col">&nbsp;</td>

                    <td v-for="session in thursday14" v-bind:class="session.type" v-bind:colspan="thu14col">
                        <h5>{{session.subject_name}}</h5>
                        <h5>{{session.type}}</h5>
                        <h5>{{session.start_time}} - {{session.end_time}}</h5>
                        <input type="checkbox" v-model="selectedSessions" v-bind:value="session">
                    </td>
                    <td v-if="thursday14.length === 0" class="no-bg" v-bind:colspan="thu14col">&nbsp;</td>

                    <td v-for="session in friday14" v-bind:class="session.type" v-bind:colspan="fri14col">
                        <h5>{{session.subject_name}}</h5>
                        <h5>{{session.type}}</h5>
                        <h5>{{session.start_time}} - {{session.end_time}}</h5>
                        <input type="checkbox" v-model="selectedSessions" v-bind:value="session">
                    </td>
                    <td v-if="friday14.length === 0" class="no-bg" v-bind:colspan="fri14col">&nbsp;</td>
                </tr>

                <tr class="data">
                    <td v-for="session in monday15" v-bind:class="session.type" v-bind:colspan="mon15col">
                        <h5>{{session.subject_name}}</h5>
                        <h5>{{session.type}}</h5>
                        <h5>{{session.start_time}} - {{session.end_time}}</h5>
                        <input type="checkbox" v-if="!session.disabled" v-model="selectedSessions" v-bind:value="session">
                    </td>
                    <td v-if="monday15.length === 0" class="no-bg" v-bind:colspan="mon15col">&nbsp;</td>

                    <td v-for="session in tuesday15" v-bind:class="session.type" v-bind:colspan="tue15col">
                        <h5>{{session.subject_name}}</h5>
                        <h5>{{session.type}}</h5>
                        <h5>{{session.start_time}} - {{session.end_time}}</h5>
                        <input type="checkbox" v-model="selectedSessions" v-bind:value="session">
                    </td>
                    <td v-if="tuesday15.length === 0" class="no-bg" v-bind:colspan="tue15col">&nbsp;</td>

                    <td v-for="session in wednesday15" v-bind:class="session.type" v-bind:colspan="wed15col">
                        <h5>{{session.subject_name}}</h5>
                        <h5>{{session.type}}</h5>
                        <h5>{{session.start_time}} - {{session.end_time}}</h5>
                        <input type="checkbox" v-model="selectedSessions" v-bind:value="session">
                    </td>
                    <td v-if="wednesday15.length === 0" class="no-bg" v-bind:colspan="wed15col">&nbsp;</td>

                    <td v-for="session in thursday15" v-bind:class="session.type" v-bind:colspan="thu15col">
                        <h5>{{session.subject_name}}</h5>
                        <h5>{{session.type}}</h5>
                        <h5>{{session.start_time}} - {{session.end_time}}</h5>
                        <input type="checkbox" v-model="selectedSessions" v-bind:value="session">
                    </td>
                    <td v-if="thursday15.length === 0" class="no-bg" v-bind:colspan="thu15col">&nbsp;</td>

                    <td v-for="session in friday15" v-bind:class="session.type" v-bind:colspan="fri15col">
                        <h5>{{session.subject_name}}</h5>
                        <h5>{{session.type}}</h5>
                        <h5>{{session.start_time}} - {{session.end_time}}</h5>
                        <input type="checkbox" v-model="selectedSessions" v-bind:value="session">
                    </td>
                    <td v-if="friday15.length === 0" class="no-bg" v-bind:colspan="fri15col">&nbsp;</td>
                </tr>

                <tr class="data">
                    <td v-for="session in monday16" v-bind:class="session.type" v-bind:colspan="mon16col">
                        <h5>{{session.subject_name}}</h5>
                        <h5>{{session.type}}</h5>
                        <h5>{{session.start_time}} - {{session.end_time}}</h5>
                        <input type="checkbox" v-model="selectedSessions" v-bind:value="session">
                    </td>
                    <td v-if="monday16.length === 0" class="no-bg" v-bind:colspan="mon16col">&nbsp;</td>

                    <td v-for="session in tuesday16" v-bind:class="session.type" v-bind:colspan="tue16col">
                        <h5>{{session.subject_name}}</h5>
                        <h5>{{session.type}}</h5>
                        <h5>{{session.start_time}} - {{session.end_time}}</h5>
                        <input type="checkbox" v-model="selectedSessions" v-bind:value="session">
                    </td>
                    <td v-if="tuesday16.length === 0" class="no-bg" v-bind:colspan="tue16col">&nbsp;</td>

                    <td v-for="session in wednesday16" v-bind:class="session.type" v-bind:colspan="wed16col">
                        <h5>{{session.subject_name}}</h5>
                        <h5>{{session.type}}</h5>
                        <h5>{{session.start_time}} - {{session.end_time}}</h5>
                        <input type="checkbox" v-model="selectedSessions" v-bind:value="session">
                    </td>
                    <td v-if="wednesday16.length === 0" class="no-bg" v-bind:colspan="wed16col">&nbsp;</td>

                    <td v-for="session in thursday16" v-bind:class="session.type" v-bind:colspan="thu16col">
                        <h5>{{session.subject_name}}</h5>
                        <h5>{{session.type}}</h5>
                        <h5>{{session.start_time}} - {{session.end_time}}</h5>
                        <input type="checkbox" v-model="selectedSessions" v-bind:value="session">
                    </td>
                    <td v-if="thursday16.length === 0" class="no-bg" v-bind:colspan="thu16col">&nbsp;</td>

                    <td v-for="session in friday16" v-bind:class="session.type" v-bind:colspan="fri16col">
                        <h5>{{session.subject_name}}</h5>
                        <h5>{{session.type}}</h5>
                        <h5>{{session.start_time}} - {{session.end_time}}</h5>
                        <input type="checkbox" v-model="selectedSessions" v-bind:value="session">
                    </td>
                    <td v-if="friday16.length === 0" class="no-bg" v-bind:colspan="fri16col">&nbsp;</td>
                </tr>

                <tr class="data">
                    <td v-for="session in monday17" v-bind:class="session.type" v-bind:colspan="mon17col">
                        <h5>{{session.subject_name}}</h5>
                        <h5>{{session.type}}</h5>
                        <h5>{{session.start_time}} - {{session.end_time}}</h5>
                        <input type="checkbox" v-model="selectedSessions" v-bind:value="session">
                    </td>
                    <td v-if="monday17.length === 0" class="no-bg" v-bind:colspan="mon17col">&nbsp;</td>

                    <td v-for="session in tuesday17" v-bind:class="session.type" v-bind:colspan="tue17col">
                        <h5>{{session.subject_name}}</h5>
                        <h5>{{session.type}}</h5>
                        <h5>{{session.start_time}} - {{session.end_time}}</h5>
                        <input type="checkbox" v-model="selectedSessions" v-bind:value="session">
                    </td>
                    <td v-if="tuesday17.length === 0" class="no-bg" v-bind:colspan="tue17col">&nbsp;</td>

                    <td v-for="session in wednesday17" v-bind:class="session.type" v-bind:colspan="wed17col">
                        <h5>{{session.subject_name}}</h5>
                        <h5>{{session.type}}</h5>
                        <h5>{{session.start_time}} - {{session.end_time}}</h5>
                        <input type="checkbox" v-model="selectedSessions" v-bind:value="session">
                    </td>
                    <td v-if="wednesday17.length === 0" class="no-bg" v-bind:colspan="wed17col">&nbsp;</td>

                    <td v-for="session in thursday17" v-bind:class="session.type" v-bind:colspan="thu17col">
                        <h5>{{session.subject_name}}</h5>
                        <h5>{{session.type}}</h5>
                        <h5>{{session.start_time}} - {{session.end_time}}</h5>
                        <input type="checkbox" v-model="selectedSessions" v-bind:value="session">
                    </td>
                    <td v-if="thursday17.length === 0" class="no-bg" v-bind:colspan="thu17col">&nbsp;</td>

                    <td v-for="session in friday17" v-bind:class="session.type" v-bind:colspan="fri17col">
                        <h5>{{session.subject_name}}</h5>
                        <h5>{{session.type}}</h5>
                        <h5>{{session.start_time}} - {{session.end_time}}</h5>
                        <input type="checkbox" v-model="selectedSessions" v-bind:value="session">
                    </td>
                    <td v-if="friday17.length === 0" class="no-bg" v-bind:colspan="fri17col">&nbsp;</td>
                </tr>
            </table>
            <button v-on:click="enrollSubjects" class="btn">Submit Enrollment</button>
            <button v-on:click="autoEnroll" class="btn btn-danger">Auto Enroll</button>
        </div>
    </div>
</template>
<style>
    .Lecture {
        background-color: rgb(215, 67, 64);
    }
    .Practical {
        background-color: rgb(87, 109, 124);
    }
    .nice-label {
        font-weight: 100;
    }
    table {
        width: 100%;
        overflow-x: auto;
    }
    th {
        padding: 8px;
        width: 20%;
        text-align: center;
        border: #fff 2px solid;
    }
    td {
        padding: 8px;
    }
    .row_grey {
        background-color: #F0F0F0 !important;
        border: #fff 2px solid;
    }
    table {
        overflow: auto;
        display: block;
        border: #fff 2px solid;
    }
    .data {
        background-color: rgb(215, 67, 64);
    }
    .data h5 {
        color: #fff;
    }
    input[type="checkbox"] {
        width: 20px;
    }
    .no-bg {
        background-color: #f5f5f5;
    }
</style>
<script>
    export default {
        data() {
            return {
                subjects: [],
                sessions: [],
                session: "",
                selected: [],
                count: 0,
                selectedSessions: []
            };
        },

        created() {
            this.fetchTaskList();
        },

        computed: {
            monday: function () {
                return this.sessions.filter(function (session) {
                    return session.day === 'Monday';
                })
            },
            monday8: function () {
                return this.sessions.filter(function (session) {
                    return session.day === 'Monday' && session.start_time === '08:00:00';
                })
            },
            monday9: function () {
                return this.sessions.filter(function (session) {
                    return session.day === 'Monday' && session.start_time === '09:00:00';
                })
            },
            monday10: function () {
                return this.sessions.filter(function (session) {
                    return session.day === 'Monday' && session.start_time === '10:00:00';
                })
            },
            monday11: function () {
                return this.sessions.filter(function (session) {
                    return session.day === 'Monday' && session.start_time === '11:00:00';
                })
            },
            monday12: function () {
                return this.sessions.filter(function (session) {
                    return session.day === 'Monday' && session.start_time === '12:00:00';
                })
            },
            monday13: function () {
                return this.sessions.filter(function (session) {
                    return session.day === 'Monday' && session.start_time === '13:00:00';
                })
            },
            monday14: function () {
                return this.sessions.filter(function (session) {
                    return session.day === 'Monday' && session.start_time === '14:00:00';
                })
            },
            monday15: function () {
                return this.sessions.filter(function (session) {
                    return session.day === 'Monday' && session.start_time === '15:00:00';
                })
            },
            monday16: function () {
                return this.sessions.filter(function (session) {
                    return session.day === 'Monday' && session.start_time === '16:00:00';
                })
            },
            monday17: function () {
                return this.sessions.filter(function (session) {
                    return session.day === 'Monday' && session.start_time === '17:00:00';
                })
            },
            tuesday: function () {
                return this.sessions.filter(function (session) {
                    return session.day === 'Tuesday';
                })
            },
            tuesday8: function () {
                return this.sessions.filter(function (session) {
                    return session.day === 'Tuesday' && session.start_time === '08:00:00';
                })
            },
            tuesday9: function () {
                return this.sessions.filter(function (session) {
                    return session.day === 'Tuesday' && session.start_time === '09:00:00';
                })
            },
            tuesday10: function () {
                return this.sessions.filter(function (session) {
                    return session.day === 'Tuesday' && session.start_time === '10:00:00';
                })
            },
            tuesday11: function () {
                return this.sessions.filter(function (session) {
                    return session.day === 'Tuesday' && session.start_time === '1:00:00';
                })
            },
            tuesday12: function () {
                return this.sessions.filter(function (session) {
                    return session.day === 'Tuesday' && session.start_time === '12:00:00';
                })
            },
            tuesday13: function () {
                return this.sessions.filter(function (session) {
                    return session.day === 'Tuesday' && session.start_time === '13:00:00';
                })
            },
            tuesday14: function () {
                return this.sessions.filter(function (session) {
                    return session.day === 'Tuesday' && session.start_time === '14:00:00';
                })
            },
            tuesday15: function () {
                return this.sessions.filter(function (session) {
                    return session.day === 'Tuesday' && session.start_time === '15:00:00';
                })
            },
            tuesday16: function () {
                return this.sessions.filter(function (session) {
                    return session.day === 'Tuesday' && session.start_time === '16:00:00';
                })
            },
            tuesday17: function () {
                return this.sessions.filter(function (session) {
                    return session.day === 'Tuesday' && session.start_time === '17:00:00';
                })
            },
            wednesday: function () {
                return this.sessions.filter(function (session) {
                    return session.day === 'Wednesday';
                })
            },
            wednesday8: function () {
                return this.sessions.filter(function (session) {
                    return session.day === 'Wednesday' && session.start_time === '08:00:00';
                })
            },
            wednesday9: function () {
                return this.sessions.filter(function (session) {
                    return session.day === 'Wednesday' && session.start_time === '09:00:00';
                })
            },
            wednesday10: function () {
                return this.sessions.filter(function (session) {
                    return session.day === 'Wednesday' && session.start_time === '10:00:00';
                })
            },
            wednesday11: function () {
                return this.sessions.filter(function (session) {
                    return session.day === 'Wednesday' && session.start_time === '11:00:00';
                })
            },
            wednesday12: function () {
                return this.sessions.filter(function (session) {
                    return session.day === 'Wednesday' && session.start_time === '12:00:00';
                })
            },
            wednesday13: function () {
                return this.sessions.filter(function (session) {
                    return session.day === 'Wednesday' && session.start_time === '13:00:00';
                })
            },
            wednesday14: function () {
                return this.sessions.filter(function (session) {
                    return session.day === 'Wednesday' && session.start_time === '14:00:00';
                })
            },
            wednesday15: function () {
                return this.sessions.filter(function (session) {
                    return session.day === 'Wednesday' && session.start_time === '15:00:00';
                })
            },
            wednesday16: function () {
                return this.sessions.filter(function (session) {
                    return session.day === 'Wednesday' && session.start_time === '16:00:00';
                })
            },
            wednesday17: function () {
                return this.sessions.filter(function (session) {
                    return session.day === 'Wednesday' && session.start_time === '17:00:00';
                })
            },
            thursday: function () {
                return this.sessions.filter(function (session) {
                    return session.day === 'Thursday';
                })
            },
            thursday8: function () {
                return this.sessions.filter(function (session) {
                    return session.day === 'Thursday' && session.start_time === '08:00:00';
                })
            },
            thursday9: function () {
                return this.sessions.filter(function (session) {
                    return session.day === 'Thursday' && session.start_time === '09:00:00';
                })
            },
            thursday10: function () {
                return this.sessions.filter(function (session) {
                    return session.day === 'Thursday' && session.start_time === '10:00:00';
                })
            },
            thursday11: function () {
                return this.sessions.filter(function (session) {
                    return session.day === 'Thursday' && session.start_time === '11:00:00';
                })
            },
            thursday12: function () {
                return this.sessions.filter(function (session) {
                    return session.day === 'Thursday' && session.start_time === '12:00:00';
                })
            },
            thursday13: function () {
                return this.sessions.filter(function (session) {
                    return session.day === 'Thursday' && session.start_time === '13:00:00';
                })
            },
            thursday14: function () {
                return this.sessions.filter(function (session) {
                    return session.day === 'Thursday' && session.start_time === '14:00:00';
                })
            },
            thursday15: function () {
                return this.sessions.filter(function (session) {
                    return session.day === 'Thursday' && session.start_time === '15:00:00';
                })
            },
            thursday16: function () {
                return this.sessions.filter(function (session) {
                    return session.day === 'Thursday' && session.start_time === '16:00:00';
                })
            },
            thursday17: function () {
                return this.sessions.filter(function (session) {
                    return session.day === 'Thursday' && session.start_time === '17:00:00';
                })
            },
            friday: function () {
                return this.sessions.filter(function (session) {
                    return session.day === 'Friday';
                })
            },
            friday8: function () {
                return this.sessions.filter(function (session) {
                    return session.day === 'Friday' && session.start_time === '08:00:00';
                })
            },
            friday9: function () {
                return this.sessions.filter(function (session) {
                    return session.day === 'Friday' && session.start_time === '09:00:00';
                })
            },
            friday10: function () {
                return this.sessions.filter(function (session) {
                    return session.day === 'Friday' && session.start_time === '10:00:00';
                })
            },
            friday11: function () {
                return this.sessions.filter(function (session) {
                    return session.day === 'Friday' && session.start_time === '11:00:00';
                })
            },
            friday12: function () {
                return this.sessions.filter(function (session) {
                    return session.day === 'Friday' && session.start_time === '12:00:00';
                })
            },
            friday13: function () {
                return this.sessions.filter(function (session) {
                    return session.day === 'Friday' && session.start_time === '13:00:00';
                })
            },
            friday14: function () {
                return this.sessions.filter(function (session) {
                    return session.day === 'Friday' && session.start_time === '14:00:00';
                })
            },
            friday15: function () {
                return this.sessions.filter(function (session) {
                    return session.day === 'Friday' && session.start_time === '15:00:00';
                })
            },
            friday16: function () {
                return this.sessions.filter(function (session) {
                    return session.day === 'Friday' && session.start_time === '16:00:00';
                })
            },
            friday17: function () {
                return this.sessions.filter(function (session) {
                    return session.day === 'Friday' && session.start_time === '17:00:00';
                })
            },
            maxMonday: function () {
                let max = 1;
                if(this.monday8.length > max) max = this.monday8.length;
                if(this.monday9.length > max) max = this.monday9.length;
                if(this.monday10.length > max) max = this.monday10.length;
                if(this.monday11.length > max) max = this.monday11.length;
                if(this.monday12.length > max) max = this.monday12.length;
                if(this.monday13.length > max) max = this.monday13.length;
                if(this.monday14.length > max) max = this.monday14.length;
                if(this.monday15.length > max) max = this.monday15.length;
                if(this.monday16.length > max) max = this.monday16.length;
                if(this.monday17.length > max) max = this.monday17.length;

                return max;
            },
            maxTuesday: function () {
                let max = 1;
                if(this.tuesday8.length > max) max = this.tuesday8.length;
                if(this.tuesday9.length > max) max = this.tuesday9.length;
                if(this.tuesday10.length > max) max = this.tuesday10.length;
                if(this.tuesday11.length > max) max = this.tuesday11.length;
                if(this.tuesday12.length > max) max = this.tuesday12.length;
                if(this.tuesday13.length > max) max = this.tuesday13.length;
                if(this.tuesday14.length > max) max = this.tuesday14.length;
                if(this.tuesday15.length > max) max = this.tuesday15.length;
                if(this.tuesday16.length > max) max = this.tuesday16.length;
                if(this.tuesday17.length > max) max = this.tuesday17.length;

                return max;
            },
            maxWednesday: function () {
                let max = 1;
                if(this.wednesday8.length > max) max = this.wednesday8.length;
                if(this.wednesday9.length > max) max = this.wednesday9.length;
                if(this.wednesday10.length > max) max = this.wednesday10.length;
                if(this.wednesday11.length > max) max = this.wednesday11.length;
                if(this.wednesday12.length > max) max = this.wednesday12.length;
                if(this.wednesday13.length > max) max = this.wednesday13.length;
                if(this.wednesday14.length > max) max = this.wednesday14.length;
                if(this.wednesday15.length > max) max = this.wednesday15.length;
                if(this.wednesday16.length > max) max = this.wednesday16.length;
                if(this.wednesday17.length > max) max = this.wednesday17.length;

                return max;
            },
            maxThursday: function () {
                let max = 1;
                if(this.thursday8.length > max) max = this.thursday8.length;
                if(this.thursday9.length > max) max = this.thursday9.length;
                if(this.thursday10.length > max) max = this.thursday10.length;
                if(this.thursday11.length > max) max = this.thursday11.length;
                if(this.thursday12.length > max) max = this.thursday12.length;
                if(this.thursday13.length > max) max = this.thursday13.length;
                if(this.thursday14.length > max) max = this.thursday14.length;
                if(this.thursday15.length > max) max = this.thursday15.length;
                if(this.thursday16.length > max) max = this.thursday16.length;
                if(this.thursday17.length > max) max = this.thursday17.length;

                return max;
            },
            maxFriday: function () {
                let max = 1;
                if(this.friday8.length > max) max = this.friday8.length;
                if(this.friday9.length > max) max = this.friday9.length;
                if(this.friday10.length > max) max = this.friday10.length;
                if(this.friday11.length > max) max = this.friday11.length;
                if(this.friday12.length > max) max = this.friday12.length;
                if(this.friday13.length > max) max = this.friday13.length;
                if(this.friday14.length > max) max = this.friday14.length;
                if(this.friday15.length > max) max = this.friday15.length;
                if(this.friday16.length > max) max = this.friday16.length;
                if(this.friday17.length > max) max = this.friday17.length;

                return max;
            },
            mon8col: function () {
                return this.monday8.length  === this.maxMonday || this.maxMonday;
            },
            mon9col: function () {
                return this.monday9.length  === this.maxMonday || this.maxMonday;
            },
            mon10col: function () {
                return this.monday10.length  === this.maxMonday || this.maxMonday;
            },
            mon11col: function () {
                return this.monday11.length  === this.maxMonday || this.maxMonday;
            },
            mon12col: function () {
                return this.monday12.length  === this.maxMonday || this.maxMonday;
            },
            mon13col: function () {
                return this.monday13.length  === this.maxMonday || this.maxMonday;
            },
            mon14col: function () {
                return this.monday14.length  === this.maxMonday || this.maxMonday;
            },
            mon15col: function () {
                return this.monday15.length  === this.maxMonday || this.maxMonday;
            },
            mon16col: function () {
                return this.monday16.length  === this.maxMonday || this.maxMonday;
            },
            mon17col: function () {
                return this.monday17.length  === this.maxMonday || this.maxMonday;
            },
            tue8col: function () {
                return this.tuesday8.length  === this.maxTuesday || this.maxTuesday;
            },
            tue9col: function () {
                return this.tuesday9.length  === this.maxTuesday || this.maxTuesday;
            },
            tue10col: function () {
                return this.tuesday10.length  === this.maxTuesday || this.maxTuesday;
            },
            tue11col: function () {
                return this.tuesday11.length  === this.maxTuesday || this.maxTuesday;
            },
            tue12col: function () {
                return this.tuesday12.length  === this.maxTuesday || this.maxTuesday;
            },
            tue13col: function () {
                return this.tuesday13.length  === this.maxTuesday || this.maxTuesday;
            },
            tue14col: function () {
                return this.tuesday14.length  === this.maxTuesday || this.maxTuesday;
            },
            tue15col: function () {
                return this.tuesday15.length  === this.maxTuesday || this.maxTuesday;
            },
            tue16col: function () {
                return this.tuesday16.length  === this.maxTuesday || this.maxTuesday;
            },
            tue17col: function () {
                return this.tuesday17.length  === this.maxTuesday || this.maxTuesday;
            },
            wed8col: function () {
                return this.wednesday8.length  === this.maxWednesday || this.maxWednesday;
            },
            wed9col: function () {
                return this.wednesday9.length  === this.maxWednesday || this.maxWednesday;
            },
            wed10col: function () {
                return this.wednesday10.length  === this.maxWednesday || this.maxWednesday;
            },
            wed11col: function () {
                return this.wednesday11.length  === this.maxWednesday || this.maxWednesday;
            },
            wed12col: function () {
                return this.wednesday12.length  === this.maxWednesday || this.maxWednesday;
            },
            wed13col: function () {
                return this.wednesday13.length  === this.maxWednesday || this.maxWednesday;
            },
            wed14col: function () {
                return this.wednesday14.length  === this.maxWednesday || this.maxWednesday;
            },
            wed15col: function () {
                return this.wednesday15.length  === this.maxWednesday || this.maxWednesday;
            },
            wed16col: function () {
                return this.wednesday16.length  === this.maxWednesday || this.maxWednesday;
            },
            wed17col: function () {
                return this.wednesday17.length  === this.maxWednesday || this.maxWednesday;
            },
            thu8col: function () {
                return this.thursday8.length  === this.maxThursday || this.maxThursday;
            },
            thu9col: function () {
                return this.thursday9.length  === this.maxThursday || this.maxThursday;
            },
            thu10col: function () {
                return this.thursday10.length  === this.maxThursday || this.maxThursday;
            },
            thu11col: function () {
                return this.thursday11.length  === this.maxThursday || this.maxThursday;
            },
            thu12col: function () {
                return this.thursday12.length  === this.maxThursday || this.maxThursday;
            },
            thu13col: function () {
                return this.thursday13.length  === this.maxThursday || this.maxThursday;
            },
            thu14col: function () {
                return this.thursday14.length  === this.maxThursday || this.maxThursday;
            },
            thu15col: function () {
                return this.thursday15.length  === this.maxThursday || this.maxThursday;
            },
            thu16col: function () {
                return this.thursday16.length  === this.maxThursday || this.maxThursday;
            },
            thu17col: function () {
                return this.thursday17.length  === this.maxThursday || this.maxThursday;
            },
            fri8col: function () {
                return this.friday8.length  === this.maxFriday || this.maxFriday;
            },
            fri9col: function () {
                return this.friday9.length  === this.maxFriday || this.maxFriday;
            },
            fri10col: function () {
                return this.friday10.length  === this.maxFriday || this.maxFriday;
            },
            fri11col: function () {
                return this.friday11.length  === this.maxFriday || this.maxFriday;
            },
            fri12col: function () {
                return this.friday12.length  === this.maxFriday || this.maxFriday;
            },
            fri13col: function () {
                return this.friday13.length  === this.maxFriday || this.maxFriday;
            },
            fri14col: function () {
                return this.friday14.length  === this.maxFriday || this.maxFriday;
            },
            fri15col: function () {
                return this.friday15.length  === this.maxFriday || this.maxFriday;
            },
            fri16col: function () {
                return this.friday16.length  === this.maxFriday || this.maxFriday;
            },
            fri17col: function () {
                return this.friday17.length  === this.maxFriday || this.maxFriday;
            },
        },

        watch: {
            selected: _.debounce(function (data) {
                if (data.length <= 5) {
                    for(let i = 0; i < data.length; i ++) {
                        this.getSessions(data[i].id);
                    }
                }
            }, 2000),
            selectedSessions: function (newData) {
                for(let i = 0; i < this.sessions.length; i ++) {
                    if(this.sessions[i].subject_id == newData[0].subject_id && this.sessions[i].type == newData[0].type && !this.selectedSessions.includes(this.sessions[i])){
                        this.selectedSessions.push(this.sessions[i]);
                    }
                }
            }
        },

        methods: {
            fetchTaskList() {
                axios.get('api/subjects').then((res) => {
                    this.subjects = res.data;
                });
            },

            getSessions(id) {
                this.sessions = [];
                this.selectedSessions = [];
                axios.get('api/subjects/session/get/' + id).then((res) => {
                    for(let i = 0; i < res.data.length; i ++) {
                        this.sessions.push(res.data[i]);
                    }
                });
            },

            enrollSubjects() {
                axios.post('enroll/subjects', this.selectedSessions)
                    .then(function (response) {
                        window.location.replace('/');
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            },

            autoEnroll() {
                axios.post('enroll/auto', this.selected)
                    .then(function (response) {
                        window.location.replace('/');
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            }
        }
    }
</script>