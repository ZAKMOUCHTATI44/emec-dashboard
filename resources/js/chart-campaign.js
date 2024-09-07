/**
 * Charts Apex
 */

'use strict';

(function () {
  let cardColor, headingColor, labelColor, borderColor, legendColor;

  if (isDarkStyle) {
    cardColor = config.colors_dark.cardColor;
    headingColor = config.colors_dark.headingColor;
    labelColor = config.colors_dark.textMuted;
    legendColor = config.colors_dark.bodyColor;
    borderColor = config.colors_dark.borderColor;
  } else {
    cardColor = config.colors.cardColor;
    headingColor = config.colors.headingColor;
    labelColor = config.colors.textMuted;
    legendColor = config.colors.bodyColor;
    borderColor = config.colors.borderColor;
  }

  // Color constant
  const chartColors = {
    column: {
      series1: '#826af9',
      series2: '#d2b0ff',
      bg: '#f8d3ff'
    },
    donut: {
      series1: '#fee802',
      series2: '#3fd0bd',
      series3: '#826bf8',
      series4: '#2b9bf4'
    },
    area: {
      series1: '#29dac7',
      series2: '#60f2ca',
      series3: '#a5f8cd'
    }
  };
  // --------------------------------------------------------------------

const lineChartEl = document.querySelector('#performance-campaign'),
  lineChartConfig = {
    chart: {
      height: 400,
      type: 'line',
      parentHeightOffset: 0,
      zoom: {
        enabled: false
      },
      toolbar: {
        show: false
      }
    },
    series: [
        {
            name: 'Impressions',
            data: JSON.parse(lineChartEl.getAttribute('data-impressions-week'))
        },
        {
            name: 'Clicks',
            data: JSON.parse(lineChartEl.getAttribute('data-clicks-week'))
        },
        // {
        //     name: 'CTR',
        //     data: [20, 19, 120, 110, 20, 5, 60]
        // },
        // {
        //     name: 'COST',
        //     data: [15, 40, 20, 110, 54, 20, 40]
        // },
    ],
    // markers: {
    //     strokeWidth: 7,
    //     strokeOpacity: 1,
    //     strokeColors: [cardColor],
    //     colors: [config.colors.warning]
    // },
    dataLabels: {
      enabled: false
    },
    stroke: {
      curve: 'straight'
    },
    colors: ["#34c857","#1449de","#9c39da","#ebbf17"],
    grid: {
      borderColor: borderColor,
      xaxis: {
        lines: {
          show: true
        }
      },
      padding: {
        top: -20
      }
    },
    // tooltip: {
    //   custom: function ({ series, seriesIndex, dataPointIndex, w }) {
    //     return '<div class="px-3 py-2">' + '<span>' + series[seriesIndex][dataPointIndex] + '%</span>' + '</div>';
    //   }
    // },
    xaxis: {
      categories: ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
      axisBorder: {
        show: false
      },
      axisTicks: {
        show: false
      },
      labels: {
        style: {
          colors: labelColor,
          fontSize: '13px'
        }
      }
    },
    yaxis: {
      labels: {
        style: {
          colors: labelColor,
          fontSize: '13px'
        }
      }
    }
  };
if (typeof lineChartEl !== undefined && lineChartEl !== null) {
  const lineChart = new ApexCharts(lineChartEl, lineChartConfig);
  lineChart.render();
}

// Chart CPC
const radialBarChartEl = document.querySelector('#chartCPC'),
radialBarChartConfig = {
  chart: {
    height: 380,
    type: 'radialBar'
  },
  colors: [chartColors.donut.series1],
  plotOptions: {
    radialBar: {
      size: 185,
      hollow: {
        size: '40%'
      },
      track: {
        margin: 10,
        background: config.colors_label.secondary
      },
      dataLabels: {
        name: {
          fontSize: '1rem',
          fontFamily: 'Open Sans'
        },
        value: {
          fontSize: '1rem',
          color: legendColor,
          fontFamily: 'Open Sans'
        },
        total: {
          show: true,
          fontWeight: 400,
          fontSize: '1rem',
          color: headingColor,
          label: 'CPC',
          formatter: function (w) {
            return `${radialBarChartEl.getAttribute('data-value')} $`;
          }
        }
      }
    }
  },
  grid: {
    borderColor: borderColor,
    padding: {
      top: -25,
      bottom: -20
    }
  },
  legend: {
    show: true,
    position: 'bottom',
    labels: {
      colors: legendColor,
      useSeriesColors: false
    }
  },
  stroke: {
    lineCap: 'round'
  },
  series: [radialBarChartEl.getAttribute('data-value')],
  labels: ['CPC']
};
if (typeof radialBarChartEl !== undefined && radialBarChartEl !== null) {
const radialChart = new ApexCharts(radialBarChartEl, radialBarChartConfig);
radialChart.render();
}

// Chart CPM
const chartCPM = document.querySelector('#chartCPM'),
    chartCPMConfig = {
    chart: {
        height: 380,
        type: 'radialBar'
    },
    colors: ["#ab57df"],
    plotOptions: {
        radialBar: {
        size: 185,
        hollow: {
            size: '40%'
        },
        track: {
            margin: 10,
            background: config.colors_label.secondary
        },
        dataLabels: {
            name: {
            fontSize: '1rem',
            fontFamily: 'Open Sans'
            },
            value: {
            fontSize: '1rem',
            color: legendColor,
            fontFamily: 'Open Sans'
            },
            total: {
            show: true,
            fontWeight: 400,
            fontSize: '1rem',
            color: headingColor,
            label: 'CPM',
            formatter: function (w) {
                return ` ${chartCPM.getAttribute('data-value')} $`;
            }
            }
        }
        }
    },
    grid: {
        borderColor: borderColor,
        padding: {
        top: -25,
        bottom: -20
        }
    },
    legend: {
        show: true,
        position: 'bottom',
        labels: {
        colors: legendColor,
        useSeriesColors: false
        }
    },
    stroke: {
        lineCap: 'round'
    },
    series: [chartCPM.getAttribute('data-value')],
    labels: ['CPM']
    };
if (typeof chartCPM !== undefined && chartCPM !== null) {
    const radialChart = new ApexCharts(chartCPM, chartCPMConfig);
    radialChart.render();
}

// Chart CPM
const chartCTR = document.querySelector('#chartCTR'),
    chartCTRConfig = {
    chart: {
        height: 380,
        type: 'radialBar'
    },
    colors: ["#da2c20"],
    plotOptions: {
        radialBar: {
        size: 185,
        hollow: {
            size: '40%'
        },
        track: {
            margin: 10,
            background: config.colors_label.secondary
        },
        dataLabels: {
            name: {
            fontSize: '1rem',
            fontFamily: 'Open Sans'
            },
            value: {
            fontSize: '1rem',
            color: legendColor,
            fontFamily: 'Open Sans'
            },
            total: {
            show: true,
            fontWeight: 400,
            fontSize: '1rem',
            color: headingColor,
            label: 'CTR',
            formatter: function (w) {
                return ` ${chartCTR.getAttribute('data-value')} %`;
            }
            }
        }
        }
    },
    grid: {
        borderColor: borderColor,
        padding: {
        top: -25,
        bottom: -20
        }
    },
    legend: {
        show: true,
        position: 'bottom',
        labels: {
        colors: legendColor,
        useSeriesColors: false
        }
    },
    stroke: {
        lineCap: 'round'
    },
    series: [chartCTR.getAttribute('data-value')],
    labels: ['CTR']
    };
if (typeof chartCTR !== undefined && chartCTR !== null) {
    const radialChart = new ApexCharts(chartCTR, chartCTRConfig);
    radialChart.render();
}

const chartSpent = document.querySelector('#chartSpent'),
    chartSpentConfig = {
    chart: {
        height: 380,
        type: 'radialBar'
    },
    colors: ["#198f3c"],
    plotOptions: {
        radialBar: {
        size: 185,
        hollow: {
            size: '40%'
        },
        track: {
            margin: 10,
            background: config.colors_label.secondary
        },
        dataLabels: {
            name: {
            fontSize: '1rem',
            fontFamily: 'Open Sans'
            },
            value: {
            fontSize: '1rem',
            color: legendColor,
            fontFamily: 'Open Sans'
            },
            total: {
            show: true,
            fontWeight: 400,
            fontSize: '1rem',
            color: headingColor,
            label: 'Spent',
            formatter: function (w) {
                return ` ${chartSpent.getAttribute('data-value')} $`;
            }
            }
        }
        }
    },
    grid: {
        borderColor: borderColor,
        padding: {
        top: -25,
        bottom: -20
        }
    },
    legend: {
        show: true,
        position: 'bottom',
        labels: {
        colors: legendColor,
        useSeriesColors: false
        }
    },
    stroke: {
        lineCap: 'round'
    },
    series: [chartSpent.getAttribute('data-percentage')],
    labels: ['Spent']
    };
if (typeof chartSpent !== undefined && chartSpent !== null) {
    const radialChart = new ApexCharts(chartSpent, chartSpentConfig);
    radialChart.render();
}

const genderChart = document.querySelector('#genderChart'),
    genderChartConfig = {
      chart: {
        height: 400,
        type: 'donut'
      },
      labels: ['Male', 'Female', 'Unknown'],
      series: [JSON.parse(genderChart.getAttribute('data-male')), JSON.parse(genderChart.getAttribute('data-female')), JSON.parse(genderChart.getAttribute('data-unknown'))],
      colors: [
        "#029ef6",
        "#f7a4c9",
        "#656565",
      ],
      stroke: {
        show: false,
        curve: 'straight'
      },
      dataLabels: {
        enabled: true,
        formatter: function (val, opt) {
          return parseInt(val) + '%';
        }
      },
      legend: {
        show: true,
        position: 'bottom',
        markers: { offsetX: -3 },
        itemMargin: {
          vertical: 3,
          horizontal: 10
        },
        labels: {
          colors: legendColor,
          useSeriesColors: false
        }
      },
      plotOptions: {
        pie: {
          donut: {
            labels: {
              show: true,
              name: {
                fontSize: '2rem',
                // fontFamily: 'Open Sans'
              },
              value: {
                fontSize: '1rem',
                color: legendColor,
                // fontFamily: 'Open Sans',
                formatter: function (val) {
                    console.log(val)
                  return parseInt(val) + '%';
                }
              },
                //   total: {
                //     show: true,
                //     fontSize: '1.5rem',
                //     color: headingColor,
                //     label: 'Operational',
                //     formatter: function (w) {
                //       return '42%';
                //     }
                //   }
            }
          }
        }
      },
      responsive: [
        {
          breakpoint: 992,
          options: {
            chart: {
              height: 400
            },
            legend: {
              position: 'bottom',
              labels: {
                colors: legendColor,
                useSeriesColors: false
              }
            }
          }
        },
        {
          breakpoint: 576,
          options: {
            chart: {
              height: 400
            },
            plotOptions: {
              pie: {
                donut: {
                  labels: {
                    show: true,
                    name: {
                      fontSize: '1.5rem'
                    },
                    value: {
                      fontSize: '1rem'
                    },
                    total: {
                      fontSize: '1.5rem'
                    }
                  }
                }
              }
            },
            legend: {
              position: 'bottom',
              labels: {
                colors: legendColor,
                useSeriesColors: false
              }
            }
          }
        },
        {
          breakpoint: 420,
          options: {
            chart: {
              height: 280
            },
            legend: {
              show: false
            }
          }
        },
        {
          breakpoint: 360,
          options: {
            chart: {
              height: 250
            },
            legend: {
              show: false
            }
          }
        }
      ]
    };
  if (typeof genderChart !== undefined && genderChart !== null) {
    const genderChartEl = new ApexCharts(genderChart, genderChartConfig);
    genderChartEl.render();
  }

  const chartAge = document.querySelector('#chartAge'),
  chartAgeConfig = {
      chart: {
        height: 400,
        type: 'bar',
        toolbar: {
          show: false
        }
      },
      plotOptions: {
        bar: {
          horizontal: true,
          barHeight: '30%',
          startingShape: 'rounded',
          borderRadius: 8
        },
      },
      grid: {
        borderColor: borderColor,
        xaxis: {
          lines: {
            show: false
          }
        },
        padding: {
          top: -20,
          bottom: -12
        }
      },
      colors: config.colors.info,
      dataLabels: {
        enabled: true,
        formatter: function (val, opt) {
            return parseInt(val) + '%';
        }
      },
      series: [
        {
          data : [JSON.parse(chartAge.getAttribute('data-audience_18_24')),JSON.parse(chartAge.getAttribute('data-audience_25_34')),JSON.parse(chartAge.getAttribute('data-audience_35_44')),JSON.parse(chartAge.getAttribute('data-audience_45_54')), JSON.parse(chartAge.getAttribute('data-audience_55_64')), JSON.parse(chartAge.getAttribute('data-audience_more'))]
        }
      ],
      xaxis: {
        categories: ['18-24', '25-34', '35-44', '45-54', '55-64', '64-more', 'Unknown'],
        axisBorder: {
          show: false
        },
        axisTicks: {
          show: false
        },
        labels: {
          style: {
            colors: labelColor,
            fontSize: '13px'
          }
        }
      },
      yaxis: {
        labels: {
          style: {
            colors: labelColor,
            fontSize: '13px'
          }
        }
      }
    };
  if (typeof chartAge !== undefined && chartAge !== null) {
    const horizontalBarChart = new ApexCharts(chartAge, chartAgeConfig);
    horizontalBarChart.render();
  }

})();
