/****** Object:  Table [dbo].[alumno]    Script Date: 29/12/2020 9:13:35 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[alumno](
	[id] [varchar](12) NOT NULL,
	[identificacion] [varchar](13) NOT NULL,
	[apellido_paterno] [varchar](50) NOT NULL,
	[apellido_materno] [varchar](50) NULL,
	[primer_nombre] [varchar](50) NOT NULL,
	[segundo_nombre] [varchar](50) NULL,
	[telefono] [varchar](50) NULL,
	[email_institucional] [varchar](250) NULL,
	[email_personal] [varchar](250) NULL,
	[sexo] [char](1) NULL,
	[carrera_id] [varchar](12) NULL,
	[token] [varchar](255) NULL,
	[estado] [char](1) NULL,
 CONSTRAINT [PK_alumno] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[alumno_asignatura]    Script Date: 29/12/2020 9:13:35 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[alumno_asignatura](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[alumno_id] [varchar](12) NOT NULL,
	[encuestada] [int] NULL,
	[profesor_asignatura_id] [varchar](12) NOT NULL,
	[observacion] [varchar](300) NULL,
 CONSTRAINT [PK_alumno_asignatura] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[asignatura]    Script Date: 29/12/2020 9:13:35 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[asignatura](
	[id] [varchar](12) NOT NULL,
	[descripcion] [varchar](600) NULL,
	[codigo] [varchar](30) NULL,
 CONSTRAINT [PK_asignatura] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[carrera]    Script Date: 29/12/2020 9:13:35 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[carrera](
	[id] [varchar](12) NOT NULL,
	[codigo] [varchar](50) NULL,
	[descripcion] [varchar](300) NULL,
	[facultad_id] [varchar](12) NULL,
 CONSTRAINT [PK_carrera] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[profesor]    Script Date: 29/12/2020 9:13:35 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[profesor](
	[id] [varchar](12) NOT NULL,
	[identificacion] [varchar](50) NOT NULL,
	[apellido_paterno] [varchar](50) NOT NULL,
	[apellido_materno] [varchar](50) NULL,
	[primer_nombre] [varchar](50) NOT NULL,
	[segundo_nombre] [varchar](50) NULL,
	[telefono] [varchar](50) NULL,
	[email_institucional] [varchar](250) NULL,
	[email_personal] [varchar](250) NULL,
	[sexo] [char](1) NULL,
	[carrera_id] [varchar](12) NULL,
	[estado] [char](1) NULL,
 CONSTRAINT [PK_profesor] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[profesor_asignatura]    Script Date: 29/12/2020 9:13:35 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[profesor_asignatura](
	[id] [varchar](12) NOT NULL,
	[profesor_id] [varchar](12) NULL,
	[asignatura_id] [varchar](12) NULL,
	[codigo] [varchar](30) NULL,
	[paralelo] [varchar](2) NULL,
 CONSTRAINT [PK_profesor_asignatura] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  View [dbo].[ListaAlumnosNoEvaluan]    Script Date: 29/12/2020 9:13:35 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
/* Listado de Alumnos que no han evaludo por asignatura*/
CREATE VIEW [dbo].[ListaAlumnosNoEvaluan]
AS
SELECT        TOP (100) PERCENT dbo.alumno.identificacion, dbo.alumno.apellido_paterno AS Apellidos, dbo.alumno.primer_nombre AS Nombres, dbo.carrera.descripcion AS Carrera, dbo.asignatura.descripcion AS Asignatura, 
                         { fn CONCAT(dbo.profesor.apellido_paterno + ' ', dbo.profesor.primer_nombre) } AS Profesor
FROM            dbo.profesor_asignatura INNER JOIN
                         dbo.alumno_asignatura ON dbo.profesor_asignatura.id = dbo.alumno_asignatura.profesor_asignatura_id INNER JOIN
                         dbo.alumno ON dbo.alumno_asignatura.alumno_id = dbo.alumno.id INNER JOIN
                         dbo.asignatura ON dbo.profesor_asignatura.asignatura_id = dbo.asignatura.id INNER JOIN
                         dbo.profesor ON dbo.profesor_asignatura.profesor_id = dbo.profesor.id INNER JOIN
                         dbo.carrera ON dbo.alumno.carrera_id = dbo.carrera.id
WHERE        (dbo.alumno_asignatura.encuestada = 0) AND (dbo.alumno.apellido_materno <> 'RETIRADO')
ORDER BY Apellidos
GO
/****** Object:  Table [dbo].[auth_assignment]    Script Date: 29/12/2020 9:13:35 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[auth_assignment](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[item_name] [varchar](64) NOT NULL,
	[user_id] [varchar](64) NOT NULL,
	[created_at] [int] NULL,
 CONSTRAINT [PK__auth_ass__473EC9E668A1F0B3] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[auth_item]    Script Date: 29/12/2020 9:13:35 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[auth_item](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[name] [varchar](64) NOT NULL,
	[type] [smallint] NOT NULL,
	[description] [text] NULL,
	[rule_name] [varchar](64) NULL,
	[data] [varchar](max) NULL,
	[created_at] [int] NULL,
	[updated_at] [int] NULL,
 CONSTRAINT [PK_rol] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
/****** Object:  Table [dbo].[auth_item_child]    Script Date: 29/12/2020 9:13:35 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[auth_item_child](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[parent] [varchar](64) NOT NULL,
	[child] [varchar](64) NOT NULL,
 CONSTRAINT [PK__auth_ite__6E5A1F861EACAD1D] PRIMARY KEY CLUSTERED 
(
	[parent] ASC,
	[child] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[auth_rule]    Script Date: 29/12/2020 9:13:35 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[auth_rule](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[name] [varchar](64) NOT NULL,
	[data] [varchar](max) NULL,
	[created_at] [int] NULL,
	[updated_at] [int] NULL,
 CONSTRAINT [PK__auth_rul__72E12F1A47CED7DF] PRIMARY KEY CLUSTERED 
(
	[name] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
/****** Object:  Table [dbo].[carrera_profesor]    Script Date: 29/12/2020 9:13:35 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[carrera_profesor](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[carrera_id] [varchar](12) NULL,
	[profesor_id] [varchar](12) NULL,
 CONSTRAINT [PK_carrera_profesor] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[encuesta]    Script Date: 29/12/2020 9:13:35 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[encuesta](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[pregunta_id] [int] NOT NULL,
	[alumno_id] [varchar](12) NOT NULL,
	[profesor_id] [varchar](12) NOT NULL,
	[asignatura_id] [varchar](12) NOT NULL,
	[carrera_id] [varchar](12) NULL,
	[periodo_id] [int] NULL,
	[respuesta] [int] NOT NULL,
 CONSTRAINT [PK_encuesta] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[facultad]    Script Date: 29/12/2020 9:13:35 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[facultad](
	[id] [varchar](12) NOT NULL,
	[descripcion] [varchar](400) NULL,
 CONSTRAINT [PK_facultad] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[menu]    Script Date: 29/12/2020 9:13:35 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[menu](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[name] [varchar](128) NULL,
	[parent] [int] NULL,
	[route] [varchar](256) NULL,
	[order] [int] NULL,
	[data] [text] NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
/****** Object:  Table [dbo].[periodo]    Script Date: 29/12/2020 9:13:35 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[periodo](
	[id] [int] NOT NULL,
	[nombre] [varchar](400) NOT NULL,
 CONSTRAINT [PK_periodo] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[pregunta]    Script Date: 29/12/2020 9:13:35 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[pregunta](
	[id] [int] NOT NULL,
	[estado] [bit] NULL,
	[periodo_id] [int] NULL,
	[descripcion] [varchar](600) NULL,
 CONSTRAINT [PK_pregunta] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[usuario]    Script Date: 29/12/2020 9:13:35 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[usuario](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[username] [varchar](32) NOT NULL,
	[auth_key] [varchar](32) NOT NULL,
	[password_hash] [varchar](256) NOT NULL,
	[password_reset_token] [varchar](256) NULL,
	[email] [varchar](256) NOT NULL,
	[estado_id] [int] NOT NULL,
	[token] [varchar](256) NOT NULL,
	[fecha_creacion] [date] NULL,
 CONSTRAINT [PK__user__3213E83F0D9D45EA] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
ALTER TABLE [dbo].[alumno]  WITH CHECK ADD  CONSTRAINT [FK_alumno_carrera] FOREIGN KEY([carrera_id])
REFERENCES [dbo].[carrera] ([id])
GO
ALTER TABLE [dbo].[alumno] CHECK CONSTRAINT [FK_alumno_carrera]
GO
ALTER TABLE [dbo].[alumno_asignatura]  WITH CHECK ADD  CONSTRAINT [FK_alumno_asignatura_alumno] FOREIGN KEY([alumno_id])
REFERENCES [dbo].[alumno] ([id])
GO
ALTER TABLE [dbo].[alumno_asignatura] CHECK CONSTRAINT [FK_alumno_asignatura_alumno]
GO
ALTER TABLE [dbo].[carrera]  WITH CHECK ADD  CONSTRAINT [FK_carrera_facultad] FOREIGN KEY([facultad_id])
REFERENCES [dbo].[facultad] ([id])
GO
ALTER TABLE [dbo].[carrera] CHECK CONSTRAINT [FK_carrera_facultad]
GO
ALTER TABLE [dbo].[carrera_profesor]  WITH CHECK ADD  CONSTRAINT [FK_carrera_profesor_carrera] FOREIGN KEY([carrera_id])
REFERENCES [dbo].[carrera] ([id])
GO
ALTER TABLE [dbo].[carrera_profesor] CHECK CONSTRAINT [FK_carrera_profesor_carrera]
GO
ALTER TABLE [dbo].[carrera_profesor]  WITH CHECK ADD  CONSTRAINT [FK_carrera_profesor_profesor] FOREIGN KEY([profesor_id])
REFERENCES [dbo].[profesor] ([id])
GO
ALTER TABLE [dbo].[carrera_profesor] CHECK CONSTRAINT [FK_carrera_profesor_profesor]
GO
ALTER TABLE [dbo].[encuesta]  WITH CHECK ADD  CONSTRAINT [FK_encuesta_alumno] FOREIGN KEY([alumno_id])
REFERENCES [dbo].[alumno] ([id])
GO
ALTER TABLE [dbo].[encuesta] CHECK CONSTRAINT [FK_encuesta_alumno]
GO
ALTER TABLE [dbo].[encuesta]  WITH CHECK ADD  CONSTRAINT [FK_encuesta_asignatura] FOREIGN KEY([asignatura_id])
REFERENCES [dbo].[asignatura] ([id])
GO
ALTER TABLE [dbo].[encuesta] CHECK CONSTRAINT [FK_encuesta_asignatura]
GO
ALTER TABLE [dbo].[encuesta]  WITH CHECK ADD  CONSTRAINT [FK_encuesta_pregunta] FOREIGN KEY([pregunta_id])
REFERENCES [dbo].[pregunta] ([id])
GO
ALTER TABLE [dbo].[encuesta] CHECK CONSTRAINT [FK_encuesta_pregunta]
GO
ALTER TABLE [dbo].[encuesta]  WITH CHECK ADD  CONSTRAINT [FK_encuesta_profesor] FOREIGN KEY([profesor_id])
REFERENCES [dbo].[profesor] ([id])
GO
ALTER TABLE [dbo].[encuesta] CHECK CONSTRAINT [FK_encuesta_profesor]
GO
ALTER TABLE [dbo].[menu]  WITH CHECK ADD  CONSTRAINT [FK_menu_menu] FOREIGN KEY([id])
REFERENCES [dbo].[menu] ([id])
GO
ALTER TABLE [dbo].[menu] CHECK CONSTRAINT [FK_menu_menu]
GO
ALTER TABLE [dbo].[pregunta]  WITH CHECK ADD  CONSTRAINT [FK_pregunta_periodo] FOREIGN KEY([periodo_id])
REFERENCES [dbo].[periodo] ([id])
GO
ALTER TABLE [dbo].[pregunta] CHECK CONSTRAINT [FK_pregunta_periodo]
GO
ALTER TABLE [dbo].[profesor]  WITH CHECK ADD  CONSTRAINT [FK_profesor_facultad] FOREIGN KEY([carrera_id])
REFERENCES [dbo].[facultad] ([id])
GO
ALTER TABLE [dbo].[profesor] CHECK CONSTRAINT [FK_profesor_facultad]
GO
ALTER TABLE [dbo].[profesor_asignatura]  WITH CHECK ADD  CONSTRAINT [FK_profesor_asignatura_asignatura] FOREIGN KEY([asignatura_id])
REFERENCES [dbo].[asignatura] ([id])
GO
ALTER TABLE [dbo].[profesor_asignatura] CHECK CONSTRAINT [FK_profesor_asignatura_asignatura]
GO
ALTER TABLE [dbo].[profesor_asignatura]  WITH CHECK ADD  CONSTRAINT [FK_profesor_asignatura_profesor] FOREIGN KEY([profesor_id])
REFERENCES [dbo].[profesor] ([id])
GO
ALTER TABLE [dbo].[profesor_asignatura] CHECK CONSTRAINT [FK_profesor_asignatura_profesor]
GO
EXEC sys.sp_addextendedproperty @name=N'MS_DiagramPane1', @value=N'[0E232FF0-B466-11cf-A24F-00AA00A3EFFF, 1.00]
Begin DesignProperties = 
   Begin PaneConfigurations = 
      Begin PaneConfiguration = 0
         NumPanes = 4
         Configuration = "(H (1[40] 4[20] 2[20] 3) )"
      End
      Begin PaneConfiguration = 1
         NumPanes = 3
         Configuration = "(H (1 [50] 4 [25] 3))"
      End
      Begin PaneConfiguration = 2
         NumPanes = 3
         Configuration = "(H (1 [50] 2 [25] 3))"
      End
      Begin PaneConfiguration = 3
         NumPanes = 3
         Configuration = "(H (4[30] 2[40] 3) )"
      End
      Begin PaneConfiguration = 4
         NumPanes = 2
         Configuration = "(H (1 [56] 3))"
      End
      Begin PaneConfiguration = 5
         NumPanes = 2
         Configuration = "(H (2[33] 3) )"
      End
      Begin PaneConfiguration = 6
         NumPanes = 2
         Configuration = "(H (4 [50] 3))"
      End
      Begin PaneConfiguration = 7
         NumPanes = 1
         Configuration = "(V (3))"
      End
      Begin PaneConfiguration = 8
         NumPanes = 3
         Configuration = "(H (1[56] 4[18] 2) )"
      End
      Begin PaneConfiguration = 9
         NumPanes = 2
         Configuration = "(H (1 [75] 4))"
      End
      Begin PaneConfiguration = 10
         NumPanes = 2
         Configuration = "(H (1[66] 2) )"
      End
      Begin PaneConfiguration = 11
         NumPanes = 2
         Configuration = "(H (4 [60] 2))"
      End
      Begin PaneConfiguration = 12
         NumPanes = 1
         Configuration = "(H (1) )"
      End
      Begin PaneConfiguration = 13
         NumPanes = 1
         Configuration = "(V (4))"
      End
      Begin PaneConfiguration = 14
         NumPanes = 1
         Configuration = "(V (2))"
      End
      ActivePaneConfig = 5
   End
   Begin DiagramPane = 
      PaneHidden = 
      Begin Origin = 
         Top = 0
         Left = 0
      End
      Begin Tables = 
         Begin Table = "profesor_asignatura"
            Begin Extent = 
               Top = 6
               Left = 38
               Bottom = 136
               Right = 246
            End
            DisplayFlags = 280
            TopColumn = 0
         End
         Begin Table = "alumno_asignatura"
            Begin Extent = 
               Top = 8
               Left = 328
               Bottom = 138
               Right = 536
            End
            DisplayFlags = 280
            TopColumn = 0
         End
         Begin Table = "alumno"
            Begin Extent = 
               Top = 70
               Left = 540
               Bottom = 200
               Right = 748
            End
            DisplayFlags = 280
            TopColumn = 0
         End
         Begin Table = "asignatura"
            Begin Extent = 
               Top = 6
               Left = 776
               Bottom = 119
               Right = 984
            End
            DisplayFlags = 280
            TopColumn = 0
         End
         Begin Table = "profesor"
            Begin Extent = 
               Top = 178
               Left = 727
               Bottom = 308
               Right = 935
            End
            DisplayFlags = 280
            TopColumn = 0
         End
         Begin Table = "carrera"
            Begin Extent = 
               Top = 186
               Left = 210
               Bottom = 316
               Right = 418
            End
            DisplayFlags = 280
            TopColumn = 0
         End
      End
   End
   Begin SQLPane = 
   End
   Begin DataPane = 
      Begin ParameterDefaults = ""
      End
      Begin ColumnWidths = 9
         Width = 284
        ' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'VIEW',@level1name=N'ListaAlumnosNoEvaluan'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_DiagramPane2', @value=N' Width = 1500
         Width = 1500
         Width = 1500
         Width = 1800
         Width = 1500
         Width = 4035
         Width = 1500
         Width = 1500
      End
   End
   Begin CriteriaPane = 
      PaneHidden = 
      Begin ColumnWidths = 11
         Column = 1440
         Alias = 900
         Table = 1170
         Output = 720
         Append = 1400
         NewValue = 1170
         SortType = 1350
         SortOrder = 1410
         GroupBy = 1350
         Filter = 1350
         Or = 1350
         Or = 1350
         Or = 1350
      End
   End
End
' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'VIEW',@level1name=N'ListaAlumnosNoEvaluan'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_DiagramPaneCount', @value=2 , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'VIEW',@level1name=N'ListaAlumnosNoEvaluan'
GO
