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


  const areaChartEl = document.querySelector('#dashboardChart'),
  areaChartConfig = {
    chart: {
      height: 400,
      type: 'area',
      parentHeightOffset: 0,
      toolbar: {
        show: false
      }
    },
    dataLabels: {
      enabled: false
    },
    stroke: {
      show: false,
      curve: 'straight'
    },
    legend: {
      show: true,
      position: 'top',
      horizontalAlign: 'start',
      labels: {
        colors: legendColor,
        useSeriesColors: false
      }
    },
    grid: {
      borderColor: borderColor,
      xaxis: {
        lines: {
          show: true
        }
      }
    },
    colors: [chartColors.area.series3, chartColors.area.series2, chartColors.area.series1],
    series: [
      {
        name: 'Impressions',
        data: JSON.parse(areaChartEl.getAttribute('data-impressions-week'))
      },
      {
        name: 'Clicks',
        data: JSON.parse(areaChartEl.getAttribute('data-clicks-week'))
      },
    ],
    xaxis: {
      categories: [
          'Monday',
          'Tuesday',
          'Wednesday',
          'THURSDAY',
          'Friday',
          'SATURDAY',
          'Sunday',
      ],
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
    },
    fill: {
      opacity: 1,
      type: 'solid'
    },
    tooltip: {
      shared: false
    }
  };
if (typeof areaChartEl !== undefined && areaChartEl !== null) {
  const areaChart = new ApexCharts(areaChartEl, areaChartConfig);
  areaChart.render();
}
