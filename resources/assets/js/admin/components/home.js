Vue.component('v-home-get-this-year-component', {
    props: {
        url: {},
        legend: {
            type: String,
            default: 'revenue of this year'
        }
    },
    template: '#v-x-home-get-this-year-component',
    methods: {
        render(data) {
            const chart = new Chart(this.$refs.revenueThisYear.getContext('2d'), {
                type: 'bar',
                data: {
                    labels  : Object.keys(data),
                    datasets: [
                        {
                            label               : this.legend,
                            backgroundColor     : 'rgba(255,0,0,0.5)',
                            data                : Object.keys(data).map(key => data[key])
                        }
                    ]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true,
                            }
                        }]
                    },
                    legend: {
                        position: 'bottom',
                        align: 'end'
                    }
                }
            });
        },
        fetchData() {
            return this.$http.get(this.url);
        }
    },
    mounted() {
        this.fetchData().then(
            response => this.render(response.data)
        );
    }
});

Vue.component('v-home-get-spanning-days-component', {
    props: {
        range: {
            default: 30
        },
        url: {},
        legend: {
            type: String,
            default: 'spanning days'
        }
    },
    template: '#v-x-home-get-spanning-days-component',
    data() {
        return {
            chart: ''
        }
    },
    mounted() {
        this.load();
    },
    methods: {
        fetchData() {
            return this.$http.get(this.url + '?range=' + this.range);
        },
        load() {
            this.fetchData().then(
                response => this.render(response.data)
            );
        },
        render(data) {
            this.chart = new Chart(
                this.$refs.dynamic.getContext('2d'),
                {
                    type: 'horizontalBar',
                    data: {
                        labels  : Object.keys(data),
                        datasets: [
                            {
                                label               : this.legend,
                                backgroundColor     : 'orange',
                                radius              : 2,
                                borderColor         : 'red',
                                data                : Object.keys(data).map(key => data[key])
                            }
                        ]
                    },
                    options: {
                        legend: {
                            position: 'bottom',
                            align: 'end'
                        }
                    }
                }
            );
        },
        reload() {
            this.chart.destroy();
            this.load();
        }
    }
});

Vue.component('v-home-general-component', {
    template: '#v-x-home-general-component'
});
