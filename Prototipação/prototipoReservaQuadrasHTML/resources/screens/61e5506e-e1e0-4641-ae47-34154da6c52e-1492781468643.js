jQuery("#simulation")
  .on("click", ".s-61e5506e-e1e0-4641-ae47-34154da6c52e .click", function(event, data) {
    var jEvent, jFirer, cases;
    if(data === undefined) { data = event; }
    jEvent = jimEvent(event);
    jFirer = jEvent.getEventFirer();
    if(jFirer.is("#s-Button_7")) {
      cases = [
        {
          "blocks": [
            {
              "actions": [
                {
                  "action": "jimNavigation",
                  "parameter": {
                    "target": "screens/d35d3e73-1768-481c-9d6b-8e8e4d57a5df"
                  },
                  "exectype": "serial",
                  "delay": 0
                }
              ]
            }
          ],
          "exectype": "serial",
          "delay": 0
        }
      ];
      event.data = data;
      jEvent.launchCases(cases);
    } else if(jFirer.is("#s-Button_8")) {
      cases = [
        {
          "blocks": [
            {
              "actions": [
                {
                  "action": "jimNavigation",
                  "parameter": {
                    "target": "screens/d12245cc-1680-458d-89dd-4f0d7fb22724"
                  },
                  "exectype": "serial",
                  "delay": 0
                }
              ]
            }
          ],
          "exectype": "serial",
          "delay": 0
        }
      ];
      event.data = data;
      jEvent.launchCases(cases);
    }
  })
  .on("keydown.jim", ".s-61e5506e-e1e0-4641-ae47-34154da6c52e .keydown", function(event, data) {
    var jEvent, jFirer, cases;
    if(data === undefined) { data = event; }
    jEvent = jimEvent(event);
    jFirer = jEvent.getEventFirer();
    if(jFirer.is("#s-Input_5")) {
      cases = [
        {
          "blocks": [
            {
              "condition": (data.which === 9 && data.ctrlKey === false && data.shiftKey === false && data.altKey === false),
              "actions": [
                {
                  "action": "jimFocusOn",
                  "parameter": {
                    "target": [ "#s-Input_6" ]
                  },
                  "exectype": "serial",
                  "delay": 0
                }
              ]
            }
          ],
          "exectype": "serial",
          "delay": 0
        }
      ];
      event.data = data;
      jEvent.launchCases(cases);
      if(data.which === 9) {
        return false;
      }
    }
  })
  .on("focusin", ".s-61e5506e-e1e0-4641-ae47-34154da6c52e .focusin", function(event, data) {
    var jEvent, jFirer, cases;
    if(data === undefined) { data = event; }
    jEvent = jimEvent(event);
    jFirer = jEvent.getEventFirer();
    if(jFirer.is("#s-Input_5")) {
      cases = [
        {
          "blocks": [
            {
              "actions": [
                {
                  "action": "jimChangeStyle",
                  "parameter": [ {
                    "#s-61e5506e-e1e0-4641-ae47-34154da6c52e #s-Input_5": {
                      "attributes": {
                        "border-top-width": "1px",
                        "border-top-style": "solid",
                        "border-top-color": "#0088CC",
                        "border-right-width": "1px",
                        "border-right-style": "solid",
                        "border-right-color": "#0088CC",
                        "border-bottom-width": "1px",
                        "border-bottom-style": "solid",
                        "border-bottom-color": "#0088CC",
                        "border-left-width": "1px",
                        "border-left-style": "solid",
                        "border-left-color": "#0088CC",
                        "border-radius": "3px 3px 3px 3px",
                        "padding-top": "2px",
                        "padding-right": "2px",
                        "padding-bottom": "2px",
                        "padding-left": "7px"
                      },
                      "expressions": {
                        "width": "Math.max(216 - 1 - 1 - 7 - 2, 0) + 'px'",
                        "height": "Math.max(31 - 1 - 1 - 2 - 2, 0) + 'px'"
                      }
                    }
                  } ],
                  "exectype": "serial",
                  "delay": 0
                },
                {
                  "action": "jimSetValue",
                  "parameter": {
                    "target": [ "#s-Input_5" ],
                    "value": ""
                  },
                  "exectype": "serial",
                  "delay": 0
                }
              ]
            }
          ],
          "exectype": "serial",
          "delay": 0
        }
      ];
      event.data = data;
      jEvent.launchCases(cases);
    } else if(jFirer.is("#s-Input_6")) {
      cases = [
        {
          "blocks": [
            {
              "actions": [
                {
                  "action": "jimChangeStyle",
                  "parameter": [ {
                    "#s-61e5506e-e1e0-4641-ae47-34154da6c52e #s-Input_6": {
                      "attributes": {
                        "border-top-width": "1px",
                        "border-top-style": "solid",
                        "border-top-color": "#0088CC",
                        "border-right-width": "1px",
                        "border-right-style": "solid",
                        "border-right-color": "#0088CC",
                        "border-bottom-width": "1px",
                        "border-bottom-style": "solid",
                        "border-bottom-color": "#0088CC",
                        "border-left-width": "1px",
                        "border-left-style": "solid",
                        "border-left-color": "#0088CC",
                        "border-radius": "3px 3px 3px 3px",
                        "padding-top": "2px",
                        "padding-right": "2px",
                        "padding-bottom": "2px",
                        "padding-left": "7px"
                      },
                      "expressions": {
                        "width": "Math.max(216 - 1 - 1 - 7 - 2, 0) + 'px'",
                        "height": "Math.max(31 - 1 - 1 - 2 - 2, 0) + 'px'"
                      }
                    }
                  } ],
                  "exectype": "serial",
                  "delay": 0
                }
              ]
            }
          ],
          "exectype": "serial",
          "delay": 0
        }
      ];
      event.data = data;
      jEvent.launchCases(cases);
    }
  })
  .on("focusout", ".s-61e5506e-e1e0-4641-ae47-34154da6c52e .focusout", function(event, data) {
    var jEvent, jFirer, cases;
    if(data === undefined) { data = event; }
    jEvent = jimEvent(event);
    jFirer = jEvent.getEventFirer();
    if(jFirer.is("#s-Input_5")) {
      cases = [
        {
          "blocks": [
            {
              "actions": [
                {
                  "action": "jimChangeStyle",
                  "parameter": [ {
                    "#s-61e5506e-e1e0-4641-ae47-34154da6c52e #s-Input_5": {
                      "attributes": {
                        "border-top-width": "1px",
                        "border-top-style": "solid",
                        "border-top-color": "#CCCCCC",
                        "border-right-width": "1px",
                        "border-right-style": "solid",
                        "border-right-color": "#CCCCCC",
                        "border-bottom-width": "1px",
                        "border-bottom-style": "solid",
                        "border-bottom-color": "#CCCCCC",
                        "border-left-width": "1px",
                        "border-left-style": "solid",
                        "border-left-color": "#CCCCCC",
                        "border-radius": "3px 3px 3px 3px",
                        "padding-top": "2px",
                        "padding-right": "2px",
                        "padding-bottom": "2px",
                        "padding-left": "7px"
                      },
                      "expressions": {
                        "width": "Math.max(216 - 1 - 1 - 7 - 2, 0) + 'px'",
                        "height": "Math.max(31 - 1 - 1 - 2 - 2, 0) + 'px'"
                      }
                    }
                  } ],
                  "exectype": "serial",
                  "delay": 0
                }
              ]
            }
          ],
          "exectype": "serial",
          "delay": 0
        }
      ];
      event.data = data;
      jEvent.launchCases(cases);
    } else if(jFirer.is("#s-Input_6")) {
      cases = [
        {
          "blocks": [
            {
              "actions": [
                {
                  "action": "jimChangeStyle",
                  "parameter": [ {
                    "#s-61e5506e-e1e0-4641-ae47-34154da6c52e #s-Input_6": {
                      "attributes": {
                        "border-top-width": "1px",
                        "border-top-style": "solid",
                        "border-top-color": "#CCCCCC",
                        "border-right-width": "1px",
                        "border-right-style": "solid",
                        "border-right-color": "#CCCCCC",
                        "border-bottom-width": "1px",
                        "border-bottom-style": "solid",
                        "border-bottom-color": "#CCCCCC",
                        "border-left-width": "1px",
                        "border-left-style": "solid",
                        "border-left-color": "#CCCCCC",
                        "border-radius": "3px 3px 3px 3px",
                        "padding-top": "2px",
                        "padding-right": "2px",
                        "padding-bottom": "2px",
                        "padding-left": "7px"
                      },
                      "expressions": {
                        "width": "Math.max(216 - 1 - 1 - 7 - 2, 0) + 'px'",
                        "height": "Math.max(31 - 1 - 1 - 2 - 2, 0) + 'px'"
                      }
                    }
                  } ],
                  "exectype": "serial",
                  "delay": 0
                }
              ]
            }
          ],
          "exectype": "serial",
          "delay": 0
        }
      ];
      event.data = data;
      jEvent.launchCases(cases);
    }
  })
  .on("mouseenter dragenter", ".s-61e5506e-e1e0-4641-ae47-34154da6c52e .mouseenter", function(event, data) {
    var jEvent, jFirer, cases;
    if(data === undefined) { data = event; }
    jEvent = jimEvent(event);
    jFirer = jEvent.getDirectEventFirer(this);
    if(jFirer.is("#s-Button_7") && jFirer.has(event.relatedTarget).length === 0) {
      event.backupState = true;
      event.target = jFirer;
      cases = [
        {
          "blocks": [
            {
              "actions": [
                {
                  "action": "jimChangeStyle",
                  "parameter": [ {
                    "#s-61e5506e-e1e0-4641-ae47-34154da6c52e #s-Button_7": {
                      "attributes": {
                        "background-color": "#286090",
                        "background-image": "none",
                        "border-top-width": "1px",
                        "border-top-style": "solid",
                        "border-top-color": "#204D74",
                        "border-right-width": "1px",
                        "border-right-style": "solid",
                        "border-right-color": "#204D74",
                        "border-bottom-width": "1px",
                        "border-bottom-style": "solid",
                        "border-bottom-color": "#204D74",
                        "border-left-width": "1px",
                        "border-left-style": "solid",
                        "border-left-color": "#204D74",
                        "border-radius": "5px 5px 5px 5px",
                        "padding-top": "3px",
                        "padding-right": "3px",
                        "padding-bottom": "3px",
                        "padding-left": "3px"
                      },
                      "expressions": {
                        "width": "Math.max(85 - 1 - 1 - 3 - 3, 0) + 'px'",
                        "height": "Math.max(31 - 1 - 1 - 3 - 3, 0) + 'px'"
                      }
                    }
                  },{
                    "#s-61e5506e-e1e0-4641-ae47-34154da6c52e #s-Button_7": {
                      "attributes-ie": {
                        "border-top-width": "1px",
                        "border-top-style": "solid",
                        "border-top-color": "#204D74",
                        "border-right-width": "1px",
                        "border-right-style": "solid",
                        "border-right-color": "#204D74",
                        "border-bottom-width": "1px",
                        "border-bottom-style": "solid",
                        "border-bottom-color": "#204D74",
                        "border-left-width": "1px",
                        "border-left-style": "solid",
                        "border-left-color": "#204D74",
                        "border-radius": "5px 5px 5px 5px",
                        "padding-top": "3px",
                        "padding-right": "3px",
                        "padding-bottom": "3px",
                        "padding-left": "3px",
                        "-pie-background": "#286090",
                        "-pie-poll": "false"
                      },
                      "expressions-ie": {
                        "width": "Math.max(85 - 1 - 1 - 3 - 3, 0) + 'px'",
                        "height": "Math.max(31 - 1 - 1 - 3 - 3, 0) + 'px'"
                      }
                    }
                  } ],
                  "exectype": "serial",
                  "delay": 0
                }
              ]
            }
          ],
          "exectype": "serial",
          "delay": 0
        }
      ];
      jEvent.launchCases(cases);
    } else if(jFirer.is("#s-Button_8") && jFirer.has(event.relatedTarget).length === 0) {
      event.backupState = true;
      event.target = jFirer;
      cases = [
        {
          "blocks": [
            {
              "actions": [
                {
                  "action": "jimChangeStyle",
                  "parameter": [ {
                    "#s-61e5506e-e1e0-4641-ae47-34154da6c52e #s-Button_8": {
                      "attributes": {
                        "background-color": "#E6E6E6",
                        "background-image": "none",
                        "border-top-width": "1px",
                        "border-top-style": "solid",
                        "border-top-color": "#ADADAD",
                        "border-right-width": "1px",
                        "border-right-style": "solid",
                        "border-right-color": "#ADADAD",
                        "border-bottom-width": "1px",
                        "border-bottom-style": "solid",
                        "border-bottom-color": "#ADADAD",
                        "border-left-width": "1px",
                        "border-left-style": "solid",
                        "border-left-color": "#ADADAD",
                        "border-radius": "5px 5px 5px 5px",
                        "padding-top": "3px",
                        "padding-right": "3px",
                        "padding-bottom": "3px",
                        "padding-left": "3px"
                      },
                      "expressions": {
                        "width": "Math.max(68 - 1 - 1 - 3 - 3, 0) + 'px'",
                        "height": "Math.max(31 - 1 - 1 - 3 - 3, 0) + 'px'"
                      }
                    }
                  },{
                    "#s-61e5506e-e1e0-4641-ae47-34154da6c52e #s-Button_8": {
                      "attributes-ie": {
                        "border-top-width": "1px",
                        "border-top-style": "solid",
                        "border-top-color": "#ADADAD",
                        "border-right-width": "1px",
                        "border-right-style": "solid",
                        "border-right-color": "#ADADAD",
                        "border-bottom-width": "1px",
                        "border-bottom-style": "solid",
                        "border-bottom-color": "#ADADAD",
                        "border-left-width": "1px",
                        "border-left-style": "solid",
                        "border-left-color": "#ADADAD",
                        "border-radius": "5px 5px 5px 5px",
                        "padding-top": "3px",
                        "padding-right": "3px",
                        "padding-bottom": "3px",
                        "padding-left": "3px",
                        "-pie-background": "#E6E6E6",
                        "-pie-poll": "false"
                      },
                      "expressions-ie": {
                        "width": "Math.max(68 - 1 - 1 - 3 - 3, 0) + 'px'",
                        "height": "Math.max(31 - 1 - 1 - 3 - 3, 0) + 'px'"
                      }
                    }
                  } ],
                  "exectype": "serial",
                  "delay": 0
                }
              ]
            }
          ],
          "exectype": "serial",
          "delay": 0
        }
      ];
      jEvent.launchCases(cases);
    }
  })
  .on("mouseleave dragleave", ".s-61e5506e-e1e0-4641-ae47-34154da6c52e .mouseleave", function(event, data) {
    var jEvent, jFirer, cases;
    if(data === undefined) { data = event; }
    jEvent = jimEvent(event);
    jFirer = jEvent.getDirectEventFirer(this);
    if(jFirer.is("#s-Button_7")) {
      jEvent.undoCases(jFirer);
    } else if(jFirer.is("#s-Button_8")) {
      jEvent.undoCases(jFirer);
    }
  });