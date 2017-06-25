(function(window, undefined) {
  var dictionary = {
    "517ef44e-affa-48a6-b7b6-ba2000c77cd8": "inviabilizarQuadra",
    "d55c4851-59a3-4429-9a8b-8beec7987b08": "cadastroOrganizacaoAcademica",
    "61e5506e-e1e0-4641-ae47-34154da6c52e": "loginAdmin",
    "56bfc118-be4e-4d0c-b642-4b5b4eb71784": "cadastroProfessor",
    "d35d3e73-1768-481c-9d6b-8e8e4d57a5df": "homeAdmin",
    "442a8fed-f9d3-446f-91a5-4cedb8b26f7a": "homeProfessor",
    "d014ca1c-b959-4de4-8696-3192d8132c30": "loginOrganizacaoAcademica",
    "a26a10d1-8e58-4695-9080-cf8cf35e3849": "loginProfessor",
    "bf577675-1f10-43cb-ac97-84d572d5e489": "anularReservaQuadra",
    "2d361443-e8fc-4ad1-9f72-215f6bdc3378": "reservaQuadraProfessor",
    "082b1e96-f7dd-4088-ad47-13a16179d671": "loginAluno",
    "f59169a9-a608-433e-bc26-e82527d1b6fa": "cadastroAluno",
    "7a6a69a7-862d-4f55-8285-30b45821d347": "cadastroQuadra",
    "8b8d6158-e907-4cde-bc94-de10edd96b28": "homeAluno",
    "5d607fd9-9ea1-4aad-9210-05da46ede497": "reservaQuadraAluno",
    "6a5fb33f-d913-4103-8219-7eb2c75d8351": "penalidadeAdmin",
    "d12245cc-1680-458d-89dd-4f0d7fb22724": "tipoUsuario",
    "f0d4be4f-b2c4-4d0d-ad89-964f968451da": "relatorioUsuarios",
    "d97b7398-eea5-45fa-a1d4-f245316bad59": "relatorioReservaQuadras",
    "c1a22831-ef8a-41b3-9af5-438e86d2c10e": "homeOrganizacaoAcademica",
    "6623c672-a5da-417f-a2a0-34541808b7f4": "reservaQuadraOrgAcademica",
    "87db3cf7-6bd4-40c3-b29c-45680fb11462": "960 grid - 16 columns",
    "e5f958a4-53ae-426e-8c05-2f7d8e00b762": "960 grid - 12 columns",
    "f39803f7-df02-4169-93eb-7547fb8c961a": "Template 1",
    "bb8abf58-f55e-472d-af05-a7d1bb0cc014": "default"
  };

  var uriRE = /^(\/#)?(screens|templates|masters|scenarios)\/(.*)(\.html)?/;
  window.lookUpURL = function(fragment) {
    var matches = uriRE.exec(fragment || "") || [],
        folder = matches[2] || "",
        canvas = matches[3] || "",
        name, url;
    if(dictionary.hasOwnProperty(canvas)) { /* search by name */
      url = folder + "/" + canvas;
    }
    return url;
  };

  window.lookUpName = function(fragment) {
    var matches = uriRE.exec(fragment || "") || [],
        folder = matches[2] || "",
        canvas = matches[3] || "",
        name, canvasName;
    if(dictionary.hasOwnProperty(canvas)) { /* search by name */
      canvasName = dictionary[canvas];
    }
    return canvasName;
  };
})(window);