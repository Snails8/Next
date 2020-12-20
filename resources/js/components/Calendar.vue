<template>
    <div>
        <v-calendar
        :columns="2"
        title-position="center"
        >
        <template slot='header-title' slot-scope='props'>
            {{props.yearLabel}}年{{props.monthLabel}}
        </template>

        <template slot='day-content' slot-scope='props'>
            <div class="cell-header">
                {{props.day.day}}
            </div>
            <div class="cell-contemt">
            <template
              v-if="dataList.some(date => data.ymd === dateToYYYYMMDD(props.day.date))">
                <div
                class="cell-content-line"
                v-for="content in getContentFromKey(dateToYYYYMMDD(props.day.date))"
                v-bind:key="content">
                  ・{{content}}
                </div>
            </template>
            </div>
        </template>

        </v-calendar>
    </div>

</template>